<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogsActivity;
use Spatie\Activitylog\LogsActivityInterface;

class ProductType extends Model implements LogsActivityInterface
{
    use LogsActivity;
    protected static $logAttributes = ['*'];
    protected static $logOnlyDirty = true;
    public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'Product Type "' . $this->name . '" was created';
        }

        if ($eventName == 'updated')
        {
            return 'Product Type "' . $this->name . '" was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'Product Type "' . $this->name . '" was deleted';
        }
        return '';
    }
    protected $hidden=['getAllProduct'];
    public function getAllProduct(){
        return $this->hasMany(Product::class,'type_id','id')->where('status',1)->orderBy('id','desc');
    }
}
