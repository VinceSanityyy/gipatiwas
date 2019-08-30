<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = DB::table('programs')
                    ->leftJoin('assignments', 'programs.program_id', '=', 'assignments.program_id')
                    ->leftJoin('anchors', 'anchors.anchor_id', '=', 'assignments.anchor_id')
                    ->selectRaw("program_name, program_desc, program_days, start_time, end_time, program_status, GROUP_CONCAT(anchors.anchor_fname, ' ', anchor_lname SEPARATOR ', ') as anchor_name")
                    ->groupBy('programs.program_id')
                    ->get();

        $anchors = DB::table('anchors')->get();

        return view('programs', ['programs' => $programs], ['anchors' => $anchors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = $request->validate([
            'program_name' => 'required',
            'start_time' => 'required',
            'end_time' => 'required'
        ]);

        $sched = "";

        if($request->has('monCheck'))
        {
            $sched = $sched."M";
        };

        if($request->has('tueCheck'))
        {
            $sched = $sched."T";
        };

        if($request->has('wedCheck'))
        {
            $sched = $sched."W";
        };

        if($request->has('thurCheck'))
        {
            $sched = $sched."Th";
        };

        if($request->has('friCheck'))
        {
            $sched = $sched."F";
        };

        if($request->has('satCheck'))
        {
            $sched = $sched."Sa";
        };

        if($request->has('sunCheck'))
        {
            $sched = $sched."Su";
        };

        $programId = DB::table('programs')->insertGetId([
            'program_name' => $request->get('program_name'),
            'program_desc' => $request->get('program_desc'),
            'program_days' => $sched,
            'start_time' => $request->get('start_time'),
            'end_time' => $request->get('end_time'),
            'program_status' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        $anchorId = $request->get('anchor_id[]');

        for($i = 1; $i < count($anchorId); $i++)
        {
            DB::table('assignments')->insert([
                'anchor_id' => $request->get('anchor_id[$i]'),
                'program_id' => $programId,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        };

        return redirect('programs')->with('success', 'Program added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
