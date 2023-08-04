<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBeachRequest;
use App\Http\Requests\EditBeachRequest;
use Illuminate\Http\Request;
use App\Models\BeachResort;
use Illuminate\Validation\Rule;

class BeachResortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_beach = BeachResort::all();
        return view('admin.beachresorts.index', compact('list_beach')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.beachresorts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBeachRequest $request)
    {
        $newBeachResort = new BeachResort();
        $data = $request->validated();
        $newBeachResort->fill($data);
        $newBeachResort->save();

        return redirect()->route('admin.beachresorts.index', $newBeachResort->id)->with('created', $newBeachResort->name);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $beach = BeachResort::findOrFail($id);
        return view('admin.beachresorts.show',compact('beach'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $beach = BeachResort::findOrFail($id);
        return view('admin.beachresorts.edit',compact('beach'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditBeachRequest $request, $id)
    {
        $data = $request->all();
        $beach = BeachResort::findOrFail($id);

        $beach->update($data);

        return redirect()->route('admin.beachresorts.index', $beach->id)->with('update', $beach->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $beach = BeachResort::findOrFail($id);
        $beach->delete();
        return redirect()->route('admin.beachresorts.index')->with('delete', $beach->name);
    }

    public function trashed(){
        $list_beach = BeachResort::onlyTrashed()->paginate(10);
        return view('admin.beachresorts.trashed', compact('list_beach'));
    }

    public function restore(Int $id){
        $list_beach = BeachResort::withTrashed()->findOrFail($id);
        $list_beach->restore();
        return redirect()->route('admin.beachresorts.index')->with('restored', $list_beach->name);
    }
}
