<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogsActivity;
use Spatie\Activitylog\LogsActivityInterface;

class DateLog extends Model implements LogsActivityInterface
{
    use LogsActivity;
    protected static $logAttributes = ['*'];
    protected static $logOnlyDirty = true;
    public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'Date Log "' . $this->name . '" was created';
        }

        if ($eventName == 'updated')
        {
            return 'Date Log "' . $this->name . '" was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'Date Log "' . $this->name . '" was deleted';
        }
        return '';
    }
    protected $fillable=['is_send','email','date','content'];


}
