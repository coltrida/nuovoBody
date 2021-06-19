<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Http\Requests\TrainserRequest;
use App\Services\CourseService;
use App\Services\TrainerService;
use Illuminate\Http\Request;
use function compact;
use function dd;
use function redirect;
use function view;

class AuthController extends Controller
{
    public function index()
    {
        return view('adminPanel.index');
    }

    public function courses(CourseService $courseService, TrainerService $trainerService)
    {
        $courses = $courseService->listaCorsiConTrainer();
        $trainers = $trainerService->index();
        return view('adminPanel.corsi', compact('courses', 'trainers'));
    }

    public function courseDelete($id, CourseService $courseService)
    {
        $courseService->elimina($id);
        return redirect()->back();
    }

    public function courseAdd(CourseRequest $request, CourseService $courseService)
    {
        $courseService->aggiungi($request);
        return redirect()->back();
    }

    public function trainers(TrainerService $trainerService)
    {
        $trainers = $trainerService->index();
        return view('adminPanel.trainers', compact('trainers'));
    }

    public function trainersDelete($id, TrainerService $trainerService)
    {
        $trainerService->elimina($id);
        return redirect()->back();
    }

    public function trainersAdd(TrainserRequest $request, TrainerService $trainerService)
    {
        $trainerService->aggiungi($request);
        return redirect()->back();
    }
}
