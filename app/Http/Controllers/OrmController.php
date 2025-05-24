<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\area;
use App\Models\teacher;
use Illuminate\Http\Request;

class OrmController extends Controller
{
    public function consultas(){
        // $teacher =teacher::find(1);
        // return $teacher->area;
        // $area=area::find(1);
        // return $area->teachers;
        // $apprentices=apprentices::find(1);
        // return $apprentices->course;
        // $course=courses::find(2);
        // return $course->area;
        // $training_center=training_center::find(1);
        // return $training_center->teachers;
        // $computer=computers::find(1);
        // return $computer->apprentice;
        // return apprentices::with(['course', 'computer'])->get();
    }
}
