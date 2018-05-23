<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entries = Entry::all();
        return view('list', compact('entries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entry_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entry = new Entry;
        $entry->name = $request->name;
        $entry->phone = $request->phone;
        $entry->save();
        return redirect('/');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function edit(Entry $id)
    {
        $entry = Entry::find($id);
        return view('entry_update', compact('entry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entry $id)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        Entry::where('id', $id)->update(compact('name', 'phone'));
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entry $id)
    {
        Entry::destroy($id);
        return redirect('/');
    }

    //SEARCH
    public function searchform(){
        return view('entry_search');
    }
    public function search(Request $request){
        $name = $request->input('name');
        $phone = $request->input('phone');
        $entries = Entry::where('name', 'LIKE', "%$name%")->where('phone', 'LIKE', "%$phone%")->get();
        return view('search',compact('entries'));
    }
}
