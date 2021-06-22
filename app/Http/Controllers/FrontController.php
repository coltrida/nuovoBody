<?php

namespace App\Http\Controllers;

use App\Services\CourseService;
use App\Services\HourService;
use App\Services\PostService;
use App\Services\TrainerService;
use Illuminate\Http\Request;
use function compact;
use function view;

class FrontController extends Controller
{
    public function index()
    {
        return view('inizio');
    }

    public function calendario(CourseService $courseService)
    {
        $courses = $courseService->listaCorsiConCalendario();
        return view('calendario', compact('courses'));
    }

    public function about()
    {
        return view('about');
    }

    public function notizie(PostService $postService)
    {
        $inEvidenza = $postService->inEvidenza();
        $posts = $postService->lista();
        return view('posts', compact('inEvidenza', 'posts'));
    }

    public function notizia($id, PostService $postService)
    {
        $inEvidenza = $postService->inEvidenza();
        $post = $postService->show($id);
        return view('post', compact('inEvidenza', 'post'));
    }
}
