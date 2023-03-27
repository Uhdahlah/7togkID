<?php

namespace App\Models;

//use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\Authenticatable as Auth;


class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'Gamertag',
    ];
    public function getAuthPassword()
    {
        return " ";
    }

    public function getAuthIdentifierName()
    {
        return 'Gamertag';
    }

    public function getAuthIdentifier()
    {
        return $this->attributes['Gamertag'];
    }
}


