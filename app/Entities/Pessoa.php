<?php
/**
 * Created by PhpStorm.
 * User: Elvis
 * Date: 13/03/2016
 * Time: 05:49
 */

namespace CodeAgenda\Entities;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = "pessoas";

    protected $fillable = [
        'nome',
        'apelido',
        'sexo'
    ];

    public function telefones()
    {
        //
    }
}