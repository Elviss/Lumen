<?php
/**
 * Created by PhpStorm.
 * User: Elvis
 * Date: 13/03/2016
 * Time: 05:52
 */

namespace CodeAgenda\Entities;


use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = "telefones";

    protected $fillable = [
        'descriзгo',
        'codpaнs',
        'ddd',
        'prefixo',
        'sufixo'
    ];
}