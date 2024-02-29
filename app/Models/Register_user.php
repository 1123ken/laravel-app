<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register_user extends Model
{
    use HasFactory;

    //指定したカラム　更新の許可
    protected $fillable = [
        'email',
        'password',
    ];
    
    public function findAllRegister_user(){
        return Register_user::All();
    }
}
