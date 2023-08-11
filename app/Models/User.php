<?php

namespace App\Models;
use App\Models\ProfileImage;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Summary of User
 */
class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password','image','profile_photo',
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
    /**
     * Summary of messages
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages(){
        return $this->hasMany(Message::class);
    }
   

	/**
	 * The attributes that are mass assignable.
	 * 
	 * @return array<int, string>
	 */
	public function getFillable() {
		return $this->fillable;
	}
	
	/**
	 * The attributes that are mass assignable.
	 * 
	 * @param array<int, string> $fillable The attributes that are mass assignable.
	 * @return self
	 */
	public function setFillable($fillable): self {
		$this->fillable = $fillable;
		return $this;
	}
    /**
     * Summary of profileImage
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profileImage()
{
    return $this->hasOne(ProfileImage::class);
}
public function images()
{
    return $this->hasMany(Image::class);
}
public function cart()
{
    return $this->hasOne(Cart::class);
}



}
