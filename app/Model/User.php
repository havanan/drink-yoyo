<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;
use Spatie\Activitylog\LogsActivity;
use Spatie\Activitylog\LogsActivityInterface;

class User extends Authenticatable implements LogsActivityInterface
{
    use LaratrustUserTrait,Notifiable,LogsActivity;
    protected static $logAttributes = ['*'];
    protected static $logOnlyDirty = true;
    public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'User "' . $this->name . '" was created';
        }

        if ($eventName == 'updated')
        {
            return 'User "' . $this->name . '" was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'User "' . $this->name . '" was deleted';
        }
        return '';
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
