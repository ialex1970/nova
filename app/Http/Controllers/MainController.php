<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 20.06.16
 * Time: 14:34
 */

namespace App\Http\Controllers;


use App\Article;
use Collective\Html;

class MainController extends Controller
{
    protected $data = [];

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
        $this->data['articles'] = Article::all();
        return view('pages.blog', $this->data);
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