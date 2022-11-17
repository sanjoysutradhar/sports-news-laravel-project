<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @method static create(array $data)
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    private static $user,$image,$directory,$imageName;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
    'firstName',
    'lastName',
    'email',
    'image',
    'phone',
    'address',
    'password',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function getImageUrl($request){
        self::$image=$request->file('image');
        self::$imageName= self::$image->getClientOriginalName();
        self::$directory='images/user/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }
}
