<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogsActivity;
use Spatie\Activitylog\LogsActivityInterface;

class Table extends Model implements LogsActivityInterface
{
    use LogsActivity;
    protected $fillable = ['name','avatar','status','is_active'];
    protected static $logAttributes = ['*'];
    protected static $logOnlyDirty = true;
    public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'Table "' . $this->name . '" was created';
        }

        if ($eventName == 'updated')
        {
            return 'Table "' . $this->name . '" was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'Table "' . $this->name . '" was deleted';
        }
        return '';
    }
}
