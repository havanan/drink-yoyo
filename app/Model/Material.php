<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogsActivity;
use Spatie\Activitylog\LogsActivityInterface;

class Material extends Model implements LogsActivityInterface
{
    use LogsActivity;
    protected $table = 'materials';
    protected static $logAttributes = ['*'];
    protected static $logOnlyDirty = true;
    public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'Material "' . $this->name . '" was created';
        }

        if ($eventName == 'updated')
        {
            return 'Material "' . $this->name . '" was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'Material "' . $this->name . '" was deleted';
        }
        return '';
    }
    protected $fillable=['weight','name','slug','price','avatar','unit','note','status'];
}
