<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

// Libreria para funcones con string
use Illuminate\Database\Eloquent\Casts\Attribute;
use Symfony\Component\HttpFoundation\RequestMatcher\AttributesRequestMatcher;

class User extends Authenticatable
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
        'password' => 'hashed',
    ];

    // Agregando el metodo mutador para el campo nme del usuario
    protected function name(): Attribute {
        return new Attribute(
            // Accesor
            get: fn($value) => ucwords($value),
            // Mutador
            set: fn($value) => strtolower($value)
        );
    }
}
