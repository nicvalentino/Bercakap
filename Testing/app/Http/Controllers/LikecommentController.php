<?php

namespace App\Http\Controllers;

use App\Models\likecomment;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorelikecommentRequest;
use App\Http\Requests\UpdatelikecommentRequest;

class LikecommentController extends Controller
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
     * @param  \App\Http\Requests\StorelikecommentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelikecommentRequest $request)
    {
        if(Auth::check()){
            $validatedData = $request->validate([
                'user_id' => 'required',
                'comment_id' => 'required'
            ]);
            if (likecomment::isLiked($validatedData)) {
                likecomment::remove($validatedData);
                return back();
            } else {
                likecomment::create($validatedData);
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
     * @param  \App\Models\likecomment  $likecomment
     * @return \Illuminate\Http\Response
     */
    public function show(likecomment $likecomment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\likecomment  $likecomment
     * @return \Illuminate\Http\Response
     */
    public function edit(likecomment $likecomment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelikecommentRequest  $request
     * @param  \App\Models\likecomment  $likecomment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelikecommentRequest $request, likecomment $likecomment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\likecomment  $likecomment
     * @return \Illuminate\Http\Response
     */
    public function destroy(likecomment $likecomment)
    {
        //
    }
}
