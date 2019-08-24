<?php

namespace App\Model;

use Laratrust\Models\LaratrustRole;
use Spatie\Activitylog\LogsActivity;
use Spatie\Activitylog\LogsActivityInterface;

class Role extends LaratrustRole implements LogsActivityInterface
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

    protected $fillable = ['name','display_name','description','author'];
    protected $appends = ['author_name'];
    protected $casts = [
        'created_at' => 'datetime:H:i - d/m/Y',
    ];
    public function getAuthor(){
        return $this->belongsTo(Admin::class,'author');
    }
    public  function getAuthorNameAttribute(){
        return "{$this->getAuthor->name}";
    }
}
