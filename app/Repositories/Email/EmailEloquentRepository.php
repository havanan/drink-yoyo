<?php
/**
 * Created by PhpStorm.
 * User: anhdv
 * Date: 5/9/2018
 * Time: 11:27 AM
 */

namespace App\Repositories\Email;
use App\Model\Booking;

use App\Model\DateLog;
use App\Repositories\Bill\BillEloquentRepository;
use Auth,Mail;
use Carbon\Carbon;

/**
 * Class ExampleEloquentRepository
 * @package App\Repositories
 */
class EmailEloquentRepository implements EmailRepositoryInterface
{
    private $bill;
    public function __construct(BillEloquentRepository $bill)
    {
        $this->bill = $bill;
    }
    public function sendEmail($data_config){
        $subject = isset($data_config['subject']) ? $data_config['subject']: 'báo cáo';
        $to_name = $data_config['receiver']['name'];
        $to_email = $data_config['receiver']['email'];


        $data = array('name'=>$data_config['receiver']['name'], 'body' =>$data_config['data']);
        Mail::send('mail.mail', $data, function($message) use ($to_name, $to_email,$subject) {
            $message->to($to_email, $to_name)
                ->subject($subject);
            $message->from('vifun12@gmail.com',env('APP_NAME'));
        });
        return true;
    }
    public function sendSingerUser($user,$old_date,$subject){
        $email = $user['email'];
        $params = [
            'email' =>$email ,
            'date' => Carbon::now()->subDay()->format('Y-m-d'),
            'is_send' => 1
        ];
        //kiểm tra xem đã gửi report cho user
        $checkSend = $this->checkSend($params);
        if ($checkSend == true){
            //format data email
            $data = $this->makeEmailData($user,$old_date);
            $data['subject'] = $subject;
            //gửi mail
            $this->sendEmail($data);
            //tạo log gửi mail
            $params['content'] = json_encode($data['data']);
            $this->insertLog($params);
        }
        return true;
    }
    public function sendManyUser($users,$old_date,$subject){
        foreach ($users as $key=>$item){

            $email = $item['email'];
            $params = [
                'email' =>$email ,
                'date' => Carbon::now()->subDay()->format('Y-m-d'),
                'is_send' => 1
            ];
            //kiểm tra xem đã gửi report cho user
            $checkSend = $this->checkSend($params);
            if ($checkSend == true){
                //format data email
                $data[$key] =  $this->makeEmailData($item,$old_date);
                $data[$key]['subject'] = $subject;
                //gửi mail
                $this->sendEmail($data[$key]);
                //tạo log gửi mail
                $params['content'] = json_encode($data[$key]['data']);
                $this->insertLog($params);
            }
        }
    }
    public function checkSend($params){
        $check = DateLog::where($params)->count();
        if ($check > 0){
            return false;
        }
        return true;
    }
    public function insertLog($params){
        DateLog::create($params);
    }
    public function makeEmailData($user,$old_date){
        $data = array();
        $not_send_data = $this->getDataByDate($old_date);
        $data['receiver'] =$user;
        $data['data'] = $not_send_data;
        return $data;
    }
    public function getNotSendData($email,$old_date){

        $date = $old_date;
        $sended_date = DateLog::whereIn('date',$date)->where('email',$email)->where('is_send',1)->distinct('date')->orderBy('date','desc')->pluck('date')->toArray();

        if (count($sended_date) > 0){
            $not_send = array_diff($date,$sended_date);
            $not_send = array_values($not_send);
        }else{
            $not_send = $date;
        }
        $data = $this->bill->getBillByDate($not_send);
        return $data;

    }
    public function getDataByDate($old_date){
        $data = $this->bill->getByDate($old_date);
        return $data;
    }
}