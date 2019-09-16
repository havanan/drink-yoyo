<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogsActivity;
use Spatie\Activitylog\LogsActivityInterface;

class Report extends Model implements LogsActivityInterface
{
    use LogsActivity;
    protected static $logAttributes = ['*'];
    protected static $logOnlyDirty = true;
    public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'Report "' . $this->name . '" was created';
        }

        if ($eventName == 'updated')
        {
            return 'Report "' . $this->name . '" was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'Report "' . $this->name . '" was deleted';
        }
        return '';
    }
    protected $fillable=['name','active','status','total_money','total','date'];
}
