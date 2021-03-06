<?php

namespace App\Http\Controllers;

use App\Models\Famous;
use Illuminate\Http\Request;
use SweetAlert;

class FamousController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $famouses=Famous::all();
        return view('dashboard.famous',compact('famouses',$famouses));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Famous  $famous
     * @return \Illuminate\Http\Response
     */
    public function show(Famous $famous)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Famous  $famous
     * @return \Illuminate\Http\Response
     */
    public function edit(Famous $famous)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Famous  $famous
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        Famous::find($id)->update([
            'status' => $request->status,
            'updated_by' => auth()->user()->name

        ]);
        alert()->success('The Update was completed successfully.', 'Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Famous  $famous
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Famous::find($id)->delete();
        alert()->success('The deletion was completed successfully.', 'Successfully');
        return redirect()->back();
    }
}
