<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\biodata;

class biodatacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biodatas = biodata::latest()->paginate(5);
        return  view('biodata.index',compact('biodatas'))
                        ->with('i',(request()->input('page',1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('biodata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required'
        ]);
        biodata::create($request->all());
        return redirect()->route('biodata.index')
                ->with('success','new biodata created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $biodata=biodata::find($id);
        return view('biodata.detail',compact('biodata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $biodata=biodata::find($id);
        return view('biodata.edit',compact('biodata'));
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
         $request->validate([
            'name' => 'required',
            'address' => 'required'
        ]);
         $biodata=biodata::find($id);
         $biodata->name = $request->get('name');
         $biodata->address = $request->get('address');
         $biodata->save();
          return redirect()->route('biodata.index')
                ->with('success','Biodata updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $biodata = biodata::find($id);
        $biodata->delete();
        return redirect()->route('biodata.index')
                        ->with('success','Biodata deleted successfully');
    }
}
