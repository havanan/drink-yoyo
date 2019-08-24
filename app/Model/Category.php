<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogsActivity;
use Spatie\Activitylog\LogsActivityInterface;

class Category extends Model implements LogsActivityInterface
{
    use LogsActivity;
    protected static $logAttributes = ['*'];
    protected static $logOnlyDirty = true;
    public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'Category "' . $this->name . '" was created';
        }

        if ($eventName == 'updated')
        {
            return 'Category "' . $this->name . '" was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'Category "' . $this->name . '" was deleted';
        }
        return '';
    }
}
