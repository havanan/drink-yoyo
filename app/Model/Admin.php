<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Activitylog\LogsActivity;
use Spatie\Activitylog\LogsActivityInterface;

class Admin extends Authenticatable implements LogsActivityInterface
{

    use Notifiable,LogsActivity;
    /**
     * Log Activity.
     */
    protected static $logAttributes = ['*'];
    protected static $logOnlyDirty = true;
    public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'Admin "' . $this->name . '" was created';
        }

        if ($eventName == 'updated')
        {
            return 'Admin "' . $this->name . '" was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'Admin "' . $this->name . '" was deleted';
        }
        return '';
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'admins';
    protected $guard = 'admin';
    protected $fillable = [
        'name', 'email', 'password','is_supper',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}
