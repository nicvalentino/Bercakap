<?php

namespace App\Http\Controllers;

use App\Models\dislikecomment;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoredislikecommentRequest;
use App\Http\Requests\UpdatedislikecommentRequest;

class DislikecommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoredislikecommentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredislikecommentRequest $request)
    {
        if(Auth::check()){
            $validatedData = $request->validate([
                'user_id' => 'required',
                'comment_id' => 'required'
            ]);
            if (dislikecomment::isLiked($validatedData)) {
                dislikecomment::remove($validatedData);
                return back();
            } else {
                dislikecomment::create($validatedData);
                return back();
            }
    
            return redirect()->to('/artikel');
            return $request;
        } else {
            return redirect('/login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dislikecomment  $dislikecomment
     * @return \Illuminate\Http\Response
     */
    public function show(dislikecomment $dislikecomment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dislikecomment  $dislikecomment
     * @return \Illuminate\Http\Response
     */
    public function edit(dislikecomment $dislikecomment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedislikecommentRequest  $request
     * @param  \App\Models\dislikecomment  $dislikecomment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedislikecommentRequest $request, dislikecomment $dislikecomment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dislikecomment  $dislikecomment
     * @return \Illuminate\Http\Response
     */
    public function destroy(dislikecomment $dislikecomment)
    {
        //
    }
}
