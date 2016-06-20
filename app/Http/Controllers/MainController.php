<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 20.06.16
 * Time: 14:34
 */

namespace App\Http\Controllers;


class MainController extends Controller
{
    public function main()
    {
        return view('pages.index');
    }
}