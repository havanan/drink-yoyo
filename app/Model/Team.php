<?php

namespace App\Model;

use Laratrust\Models\LaratrustTeam;
use Spatie\Activitylog\LogsActivity;
use Spatie\Activitylog\LogsActivityInterface;

class Team extends LaratrustTeam implements LogsActivityInterface
{
    use LogsActivity;
    protected static $logAttributes = ['*'];
    protected static $logOnlyDirty = true;
    public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'Role "' . $this->name . '" was created';
        }

        if ($eventName == 'updated')
        {
            return 'Role "' . $this->name . '" was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'Role "' . $this->name . '" was deleted';
        }
        return '';
    }
}
