<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogsActivity;
use Spatie\Activitylog\LogsActivityInterface;

class BillProduct extends Model implements LogsActivityInterface
{
    use LogsActivity;
    protected static $logAttributes = ['*'];
    protected static $logOnlyDirty = true;
    public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'Bill Product "' . $this->name . '" was created';
        }

        if ($eventName == 'updated')
        {
            return 'Bill Product "' . $this->name . '" was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'Bill Product "' . $this->name . '" was deleted';
        }
        return '';
    }
    protected $fillable = ['bill_id','product_id','qty','price'];
    protected $hidden=['getBill Product','getProduct'];
    public function getBill(){
        return $this->hasOne(Bill::class,'id','type_id');
    }
    public function getProduct(){
        return $this->hasOne(Product::class,'id','type_id')->where('status',1);

    }

}
