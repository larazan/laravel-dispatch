<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function order_index(Request $request)
    {
        $from_date = Carbon::now()->startOfMonth()->format('Y-m-d');
        $to_date = Carbon::now()->endOfMonth()->format('Y-m-d');

        if (session()->has('from_date') == false) {
            session()->put('from_date', $from_date);
            session()->put('to_date', $to_date);
        }

        return view('admin-views.report.order-index');
    }

    public function earning_index(Request $request)
    {
        if (!$request->has('from_date')) {
            $from = $to = date('Y-m-01');
        } else {
            $from = $request['from_date'];
            $to = $request['to_date'];
        }
        return view('admin-views.report.earning-index', compact('from', 'to'));
    }

    public function set_date(Request $request)
    {
        $from = $request['from'];
        $to = $request['to'];

        session()->put('from_date', $from);
        session()->put('to_date', $to);

        $previousUrl = strtok(url()->previous(), '?');
        return redirect()->to($previousUrl . '?' . http_build_query(['from_date' => $request['from'], 'to_date' => $request['to']]))->with(['from' => $from, 'to' => $to]);
    }
}
