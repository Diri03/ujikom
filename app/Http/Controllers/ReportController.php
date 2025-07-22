<?php

namespace App\Http\Controllers;

use App\Models\TransOrders;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report()
    {
        $title = 'Report';
        $orders = TransOrders::withTrashed()->with(['customer', 'details'])->get();
        return view('report.index', compact('orders', 'title'));
    }

    public function reportFilter(Request $request)
    {
        $title = 'Report';

        if ($request->date_start && $request->date_end) {
            $startDate = $request->date_start;
            $endDate = $request->date_end;

            $orders = TransOrders::withTrashed()->with(['customer', 'details'])
                ->whereDate('order_date', '>=', $startDate)
                ->whereDate('order_date', '<=', $endDate)
                ->get();

            session([
                "START_DATE" => $startDate,
                "END_DATE" => $endDate
            ]);
            return view('report.index', compact('title', 'orders'));
        }

        $orders = TransOrders::withTrashed()->with(['order.customer', 'service'])->get();
        return view('report.index', compact('orders', 'title'));
    }

    public function printLaporan()
    {
        $title = 'Print Report';
        if (session('START_DATE')) {
            $orders = TransOrders::withTrashed()->with(['customer', 'details'])
                ->whereDate('order_date', '>=', session('START_DATE'))
                ->whereDate('order_date', '<=', session('END_DATE'))
                ->get();

            return view('report.print', compact('title', 'orders'));
        }
        $orders = TransOrders::withTrashed()->with(['customer', 'details'])->get();
        session()->forget(['START_DATE', 'END_DATE']);
        return view('report.print', compact('title', 'orders'));
    }
}
