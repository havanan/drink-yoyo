<?php

namespace App\Model;

use Laratrust\Models\LaratrustPermission;
use Spatie\Activitylog\LogsActivity;
use Spatie\Activitylog\LogsActivityInterface;

class Permission extends LaratrustPermission implements LogsActivityInterface
{
    use LogsActivity;
    protected static $logAttributes = ['*'];
    protected static $logOnlyDirty = true;
    public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'Permission "' . $this->name . '" was created';
        }

        if ($eventName == 'updated')
        {
            return 'Permission "' . $this->name . '" was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'Permission "' . $this->name . '" was deleted';
        }
        return '';
    }
}
