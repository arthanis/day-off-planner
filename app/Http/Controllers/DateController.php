<?php

namespace App\Http\Controllers;

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

        return view('dates.index', compact('dates'));
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
        $validateDate = $request->validate([
            'date' => 'required|date_format:Y-m-d'
        ]);

        Date::create(request(['date']));

        return redirect('/');
    }
}
