<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TravelController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = collect([
                ['id' => 1, 'name' => 'John'],
                ['id' => 2, 'name' => 'Jane'],
                ['id' => 3, 'name' => 'James'],
            ]);
            return DataTables::of($collection)->toJson();
        }
    }
}
