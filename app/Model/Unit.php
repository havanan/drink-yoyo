<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogsActivity;
use Spatie\Activitylog\LogsActivityInterface;

class Unit extends Model implements LogsActivityInterface
{
    use LogsActivity;
    protected static $logAttributes = ['*'];
    protected static $logOnlyDirty = true;
    public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'Unit "' . $this->name . '" was created';
        }

        if ($eventName == 'updated')
        {
            return 'Unit "' . $this->name . '" was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'Unit "' . $this->name . '" was deleted';
        }
        return '';
    }
    protected $fillable = ['name','to_kg','status','percent'];
}
