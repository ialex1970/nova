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

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function single()
    {
        return view('pages.single');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function portfolio()
    {
        return view('pages.portfolio');
    }
}