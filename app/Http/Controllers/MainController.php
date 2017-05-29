<?php namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        $posts = [];
        /*
        dump(Auth::user());
        dump(Auth::check());
        */
        return view('layouts.primary', [
            'page' => 'pages.main',
            'title' => 'Blogplace :: Блог PHP 4',
            'content' => '<p>Привет, этот блог создан в рамках курса PHP Strong (PHP4)!</p>',
            'image' => [
                'path' => 'assets/images/imgphp.png',
                'alt' => 'Image'
            ],
            'activeMenu' => 'main',
            'posts' => $posts
        ]);
    }

    public function about()
    {
        return view('layouts.primary', [
            'page' => 'pages.about',
            'title' => 'О блоге',
            'content' => '<p>Привет, этот блог создан в рамках курса PHP Strong (PHP4)!</p>',
            'image' => [
                'path' => 'assets/images/imgphp.png',
                'alt' => 'Image'
            ],
            'activeMenu' => 'about',
        ]);
    }

    public function feedback()
    {
        return view('layouts.primary', [
            'page' => 'pages.feedback',
            'title' => 'Обратная связь',
            'content' => '<p>Привет, этот блог создан в рамках курса PHP Strong (PHP4)!</p>',
            'activeMenu' => 'feedback',
        ]);
    }

}
