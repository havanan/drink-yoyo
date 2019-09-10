<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogsActivity;
use Spatie\Activitylog\LogsActivityInterface;

class Product extends Model implements LogsActivityInterface
{
    use LogsActivity;
    protected static $logAttributes = ['*'];
    protected static $logOnlyDirty = true;
    public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'Product "' . $this->name . '" was created';
        }

        if ($eventName == 'updated')
        {
            return 'Product "' . $this->name . '" was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'Product "' . $this->name . '" was deleted';
        }
        return '';
    }

    protected $fillable = ['name','slug','current_price','price','avatar','unit','note','type_id','amount','type','status'];
    public function getType(){
        return $this->hasOne(ProductType::class,'id','type_id');
    }
}
