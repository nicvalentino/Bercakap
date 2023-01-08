<?php

namespace App\Http\Controllers;

use App\Models\pertanyaan;
use Illuminate\Http\Request;
use App\Models\jawaban_psikiater;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forum', [
            'isLoggedIn' => Auth::check(),
            'user' => Auth::user(),
            'pertanyaan' => pertanyaan::latest()->Filter(request(['search']))->withCount('comments')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()){
            return view('askpage',[
                'isLoggedIn' => Auth::check(),
                'user' => Auth::user(),
            ]);
        } else {
            return view('masuk');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()){
            $validatedData = $request->validate([
                'user_id' =>'required',
                'body' => 'required'
            ]);

            pertanyaan::create($validatedData);
    
            return redirect()->intended('/forum');
        } else {
            return redirect('/login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function show(pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function edit(pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pertanyaan $pertanyaan)
    {
        pertanyaan::destroy($pertanyaan->id);
        return back();
    }
}
