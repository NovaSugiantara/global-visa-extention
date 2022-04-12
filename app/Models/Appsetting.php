<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appsetting extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'profil-website';
    protected $fillable = [
        'id',
        'phone',
        'email',
        'alamat',
        'descriptions'
    ];
    protected $rules = [
            'alamat' => 'required',
            'descriptions' => 'required',
            'phone' => 'required|digits:15',
            'email' => 'required|email|unique:users'
        ];
}
