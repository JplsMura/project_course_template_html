<?php

namespace App\Http\Controllers;

use App\Support\Seo;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - UpInside Treinamentos',
            'Descrição teste',
            url('/'),
            asset('images/img_bg_1.jpg'));

        return view('front.home', [
            'head' => $head
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
        $head = $this->seo->render(
            env('APP_NAME') . ' - UpInside Treinamentos',
            'Descrição teste',
            route('blog'),
            asset('images/img_bg_1.jpg'));

        return view('front.blog', [
            'head' => $head
        ]);
    }

    public function article()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - UpInside Treinamentos',
            'Descrição teste',
            route('article'),
            asset('images/img_bg_1.jpg'));

        return view('front.article', [
            'head' => $head
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
