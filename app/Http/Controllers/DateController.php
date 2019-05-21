<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Date;

class DateController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $dates = Date::all();
        $currentYearFirstDay = Carbon::now()->year . '-01-01';
        $currentYearLastDay = Carbon::now()->year . '-12-31';

        $filteredDates = $dates->filter(function ($value, $key) use ($currentYearFirstDay, $currentYearLastDay) {
            return $value->date >= $currentYearFirstDay && $value->date <= $currentYearLastDay;
        })->sortBy('date');

        return view('dates.index', ['dates' => $filteredDates]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('dates.create');
    }

    /**
     * @param Request $request
     * @return array
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|unique:dates|date_format:Y-m-d'
        ]);

        Date::create(request(['date', 'description']));

        return redirect('/');
    }
}
