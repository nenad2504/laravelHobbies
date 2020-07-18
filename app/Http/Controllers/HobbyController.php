<?php

namespace App\Http\Controllers;

use App\Hobby;
use Illuminate\Http\Request;
use App\Http\Requests\HobbyRequest;

class HobbyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hobbies = Hobby::all();
        return view('hobby.index')->with([
            'hobbies' => $hobbies
        ]);
        // return view('hobby.index', compact('hobbies'));  Second way
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hobby.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HobbyRequest $request)
    {
        // $request->validate([
        //     'name' => 'required|min:3',
        //     'description' => 'required|min:5',  This is one way validation
        // ]);

        $hobby = new Hobby([
            'name' => $request['name'],
            'description' => $request['description']
        ]);
        $hobby->save();

        if($hobby) {
            $request->session()->put('hobby', $hobby);

            return $this->index();
        }
        else {
            return redirect()->back()->with('message', 'Uneti podaci ne postoje u našoj bazi!')->withInput();
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function show(Hobby $hobby)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function edit(Hobby $hobby)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hobby $hobby)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hobby $hobby)
    {
        //
    }
}
