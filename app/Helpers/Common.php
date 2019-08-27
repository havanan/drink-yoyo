<?php

namespace App\Helpers;


use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use stdClass;

class Common
{
    protected static $messages;

    /**
     * @param $request
     * @param $type
     * @param $dataMessage
     * @throws \Throwable
     */
    public static function setMessage($request, $type, $dataMessage) {
        if(is_array($dataMessage)){
            static::$messages = static::array_values_recursive($dataMessage);
        }
        else{
            static::$messages = $dataMessage;
        }
        $request->session()->flash('alert-message', view('backend.elements.alert_message')->with([
            'type' => $type,
            'messages' => static::$messages,
        ])->render());
    }

    /**
     * @param $request
     * @return null
     */
    public static function getMessage($request) {
        $message = null;
        if($request->session()->has('alert-message')) {
            $message = $request->session()->get('alert-message');
        }
        return $message;
    }

    /**
     * @param $arr
     * @return array
     */
    public static function array_values_recursive($arr)
    {
        $lst = array();
        foreach( array_keys($arr) as $k ){
            $v = $arr[$k];
            if (is_scalar($v)) {
                $lst[] = $v;
            } elseif (is_array($v)) {
                $lst = array_merge( $lst,
                    static::array_values_recursive($v)
                );
            }
        }
        return $lst;
    }

    /**
     * Json Data for bootstrap table
     * @param $collection
     * @return false|string
     */
    public static function toJson($collection){
        $data = [];
        $data['total'] = $collection->total();
        $data['lastPage'] = $collection->lastPage();
        $data['perPage'] = $collection->perPage();
        $data['currentPage'] = $collection->currentPage();
        $data['rows'] = $collection->items();
        return json_encode($data);
    }
    public static function toTable($collection){
        $data = [];
        $data['recordsTotal'] = $collection->total();
        $data['recordsFiltered'] = $collection->total();
        $data['draw'] = $collection->currentPage();
        $data['data'] = $collection->items();
        return json_encode($data);
    }

    /**
     * @param $params
     * @param null $table
     * Generate parameter for pagination
     * @return array
     */
    public static function toPagination($params, $table = null){
        $limit = 10;
        $sort = "id";
        $order = "desc";
        if (!empty($params['limit'])) {
            $limit = in_array($params['limit'], LIMIT_PAGINATE) ? intval($params['limit']) : 10;
        }
        if (!empty($params['sort'])) {
            $sort = $params['sort'];
        }
        if(!empty($table)){
            $sort = $table.".".$sort;
        }
        if (!empty($params['order'])) {
            $order = $params['order'];
        }
        return ['limit' => $limit,'sort' => $sort, 'order' => $order];
    }

    /**
     * Function: Get file url
     * @param $filename
     * @param $folder
     * @return string
     */
    public static function getFileUrl($filename, $folder, $type){
        $dir = !empty($folder) ? $folder : "";
        $imageType = "default";
        if(in_array($type,IMAGE_TYPE_FOLDER)){
            $imageType = IMAGE_TYPE_FOLDER[$type];
        }
        $url = "cdn/".$dir."/".$imageType. "/". $filename;
        if(!File::exists(public_path(). "/". $url)){
            return false;
        }
        return url($url);
    }

    /**
     * Function: Get file url
     * @param $filename
     * @param $folder
     * @return string
     */
    public static function getImageWithDefaultUrl($filename, $folder, $type){

        $dir = !empty($folder) ? $folder : "";
        if(empty($filename)){
            return url('assets/img/no_image.png');
        }
        $imageType = "default";
        if(in_array($type,array_flip(IMAGE_TYPE_FOLDER))){
            $imageType = IMAGE_TYPE_FOLDER[$type];
        }
        $url = "cdn/".$dir."/".$imageType. "/". $filename;
        $urlSmall = "cdn/".$dir."/small/". $filename;

        if(File::exists(public_path(). "/". $url)){
            return url($url);
        }elseif (File::exists(public_path(). "/". $urlSmall)){
            return url($urlSmall);
        }
        else{
            return url('assets/img/no_image.png');
        }

    }

}