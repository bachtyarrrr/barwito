<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
        return view('index');
    }

    public function store(Request $request)
    {
        $travel_type = $request->travel_type;
        $request_by = $request->request_by;
        $destination = $request->destination;
        $reason = $request->reason;
        $letter_date = $request->letter_date;
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $approval_status = $request->approval_status;

        // $check = Travel::where(['travel_type' => $travel_type, 'user_id' => ])->first();

        // if ($check) {
        //     return response()->json(["message" => "Travel Type already exist", "code" => 409], 200);
        // }

        DB::beginTransaction();
        try {
            $travel = new Travel;
            // $travel->slug = Str::slug($travel_type, '-') . '-' . Str::random(5);
            $travel->travel_type = $travel_type;
            $travel->request_by = $request_by;
            $travel->destinaton = $destination;
            $travel->reason = $reason;
            $travel->letter_date = $letter_date;
            $travel->start_date = $start_date;
            $travel->end_date = $end_date;
            $travel->approval_status = $approval_status;
            $travel->save();
            DB::commit();
            return response()->json(["message" => "Success add new data travel", "code" => 200], 200);
        } catch (\Exception $ex) {
            DB::rollBack();
            return response()->json(["message" => $ex->getMessage(), "code" => 500], 200);
        }
    }
}
