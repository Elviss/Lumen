<?php
/**
 * Created by PhpStorm.
 * User: Elvis
 * Date: 13/03/2016
 * Time: 05:26
 */

namespace CodeAgenda\Http\Controllers;


class IndexController extends Controller
{
    public function index()
    {
        return view('layout');
    }
}