<?php

namespace App\Http\Controllers;

use App\Post;
use App\Support\Cropper;
use App\Support\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('created_at', 'DESC')->limit(3)->get();

        $head = $this->seo->render(
            env('APP_NAME') . ' - UpInside Treinamentos',
            'Descrição teste',
            url('/'),
            asset('images/img_bg_1.jpg'));

        return view('front.home', [
            'head' => $head,
            'posts' => $posts
        ]);
    }

    public function course()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - UpInside Treinamentos',
            'Descrição teste',
            route('course'),
            asset('images/img_bg_1.jpg'));

        return view('front.course', [
            'head' => $head
        ]);
    }

    public function blog()
    {
        $posts = Post::orderBy('created_at', 'DESC')->get();

        $head = $this->seo->render(
            env('APP_NAME') . ' - UpInside Treinamentos',
            'Descrição teste',
            route('blog'),
            asset('images/img_bg_1.jpg'));

        return view('front.blog', [
            'head' => $head,
            'posts' => $posts
        ]);
    }

    public function article($uri)
    {
        $post = Post::where('uri', $uri)->first();

        $head = $this->seo->render(
            env('APP_NAME') . ' - ' . $post->title,
            $post->subtitle,
            route('article', $post->uri),
            Storage::url(Cropper::thumb($post->cover, 1200, 628))
        );

        return view('front.article', [
            'head' => $head,
            'post' => $post
        ]);
    }

    public function contact()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - UpInside Treinamentos',
            'Descrição teste',
            route('contact'),
            asset('images/img_bg_1.jpg'));

        return view('front.contact', [
            'head' => $head
        ]);
    }
}
