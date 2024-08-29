<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'last_name',
        'is_active',
        'first_name',
        'uuid',
        'username'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getStatusFormattedAttribute(){

        if ($this->is_active) {
            return "<span class='badge badge-pill badge-soft-success font-size-11'>Active</span>";
        } else {
            return "<span class='badge badge-pill badge-soft-danger font-size-11'>InActive</span>";
        }
        
    }

    public function applications(){
        return $this->hasmany(VisaApplication::class,'applicant_id','id');
    }

    public function payments(){
        return $this->hasmany(PaymentLog::class,'applicant','id');
    }

}
