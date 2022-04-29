<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class usuario extends Model
{
    // use HasFactory;
    use  HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $table='tbl_usuarios';//base de datos
// /composer require laravel/tinker
//php artisan vendor:publish --provider="Laravel\Tinker\TinkerServiceProvider"
//php artisan tinker// prueba
//usuarios::all();
//$user = new App\Models\usuario;
     protected $fillable = [

    ];

    // /**
    //  * The attributes that should be hidden for serialization.
    //  *
    //  * @var array<int, string>
    //  */
    // protected $hidden = [// password y token ingconitos, camposlos ocultas
    //     'password',
    //     'remember_token',
    // ];

    // /**
    //  * The attributes that should be cast.
    //  *
    //  * @var array<string, string>
    //  */
    // protected $casts = [// catsteo venga en campo email, retorna verdero o false
    //     'email_verified_at' => 'datetime',
    // ];
}
