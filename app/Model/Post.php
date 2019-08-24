<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogsActivity;
use Spatie\Activitylog\LogsActivityInterface;

class Post extends Model implements LogsActivityInterface
{
    use LogsActivity;
    protected static $logAttributes = ['*'];
    protected static $logOnlyDirty = true;
    public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'Post "' . $this->name . '" was created';
        }

        if ($eventName == 'updated')
        {
            return 'Post "' . $this->name . '" was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'Post "' . $this->name . '" was deleted';
        }
        return '';
    }
}
