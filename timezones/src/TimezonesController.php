<?php

namespace Laraveldaily\Timezones;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Carbon\Carbon;

class TimezonesController extends Controller
{
    public function index($timezone)
    {
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        return view('timezones::time', compact('current_time'));
    }
}
