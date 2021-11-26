<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $vacancies = Vacancy::latest()->get();

        $positions = Position::orderBy("name", "asc")->get();

        //used in selects
        $currentYear = date("Y");

        return view("home.index", compact("vacancies", "currentYear", "positions"));
    }
}
