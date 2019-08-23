<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AnchorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anchors = DB::table('anchors')->get();


        return view('anchor', ['anchors' => $anchors]);
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
            'anchor_fname' => 'required',
            'anchor_lname' => 'required',
            'anchor_email' => 'required',
            'anchor_cnumber' => 'required',
            'anchor_bdate' => 'required'
        ]);

        if($request->get('radioSex') == 'male'){       
            DB::table('anchors')->insert([
                'anchor_fname' => $request->get('anchor_fname'),
                'anchor_lname' => $request->get('anchor_lname'),
                'anchor_email' => $request->get('anchor_email'),
                'anchor_cnumber' => $request->get('anchor_cnumber'),
                'anchor_bdate' => $request->get('anchor_bdate'),
                'anchor_sex' => 'Male',
                'anchor_status' => 'Active',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }
        else{
            DB::table('anchors')->insert([
                'anchor_fname' => $request->get('anchor_fname'),
                'anchor_lname' => $request->get('anchor_lname'),
                'anchor_email' => $request->get('anchor_email'),
                'anchor_cnumber' => $request->get('anchor_cnumber'),
                'anchor_bdate' => $request->get('anchor_bdate'),
                'anchor_sex' => 'Female',
                'anchor_status' => 'Active',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }

        return redirect('anchor')->with('success', 'Anchor added successfully!');
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
        $validator = $request->validate([
            'anchor_fname' => 'required',
            'anchor_lname' => 'required',
            'anchor_email' => 'required',
            'anchor_cnumber' => 'required',
            'anchor_bdate' => 'required'
        ]);

        if ($request->has('anchor_status')){
            if ($request->get('radioSexM') == 'male'){
                DB::table('anchors')
                ->where('anchor_id', $id)
                ->update([
                    'anchor_fname' => $request->get('anchor_fname'),
                    'anchor_lname' => $request->get('anchor_lname'),
                    'anchor_email' => $request->get('anchor_email'),
                    'anchor_cnumber' => $request->get('anchor_cnumber'),
                    'anchor_bdate' => $request->get('anchor_bdate'),
                    'anchor_sex' => 'Male',
                    'anchor_status' => 'Active',
                    'updated_at' => date("Y-m-d H:i:s")
                ]);
            }
            else{
                DB::table('anchors')
                ->where('anchor_id', $id)
                ->update([
                    'anchor_fname' => $request->get('anchor_fname'),
                    'anchor_lname' => $request->get('anchor_lname'),
                    'anchor_email' => $request->get('anchor_email'),
                    'anchor_cnumber' => $request->get('anchor_cnumber'),
                    'anchor_bdate' => $request->get('anchor_bdate'),
                    'anchor_sex' => 'Female',
                    'anchor_status' => 'Active',
                    'updated_at' => date("Y-m-d H:i:s")
                ]);
            }
        }
        else {
            if ($request->get('radioSex') == 'male'){
                DB::table('anchors')
                ->where('anchor_id', $id)
                ->update([
                    'anchor_fname' => $request->get('anchor_fname'),
                    'anchor_lname' => $request->get('anchor_lname'),
                    'anchor_email' => $request->get('anchor_email'),
                    'anchor_cnumber' => $request->get('anchor_cnumber'),
                    'anchor_bdate' => $request->get('anchor_bdate'),
                    'anchor_sex' => 'Male',
                    'anchor_status' => 'Inactive',
                    'updated_at' => date("Y-m-d H:i:s")
                ]);
            }
            else{
                DB::table('anchors')
                ->where('anchor_id', $id)
                ->update([
                    'anchor_fname' => $request->get('anchor_fname'),
                    'anchor_lname' => $request->get('anchor_lname'),
                    'anchor_email' => $request->get('anchor_email'),
                    'anchor_cnumber' => $request->get('anchor_cnumber'),
                    'anchor_bdate' => $request->get('anchor_bdate'),
                    'anchor_sex' => 'Female',
                    'anchor_status' => 'Inactive',
                    'updated_at' => date("Y-m-d H:i:s")
                ]);
            }
        }

        return redirect('anchor')->with('success', 'Anchor edited successfully!');
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
        DB::table('anchors')
        ->where('anchor_id', $id)
        ->delete();

        return redirect('anchor')->with('success', 'Anchor deleted!');
    }

    public function inactive($id)
    {
        DB::table('anchors')
        ->where('anchor_id', $id)
        ->update(['anchor_status' => 'Inactive']);

        return redirect('anchor')->with('success', 'Anchor marked inactive!');
    }
}
