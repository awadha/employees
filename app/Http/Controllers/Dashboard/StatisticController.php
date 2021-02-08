<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Statistic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:admin");
    }
    public function statistics($columns = ['*']){
     /*  $totalSalaries = DB::table("statistics")->when("total_salaries")->count();
        $totalEmployees = DB::table("statistics")->when("total_employees")->count();
      /* $statistics = Statistic::where("total_salaries", "total_employees")->get();*/
        /*$statistics = Statistic::all()->count();*/
        $statistics = Statistic::take(1)->get($columns)->first();
        return view("dashboard.statistics", compact("statistics"));
    }
}
