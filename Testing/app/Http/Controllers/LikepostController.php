<?php

namespace App\Http\Controllers;

use App\Models\likepost;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorelikepostRequest;
use App\Http\Requests\UpdatelikepostRequest;

class LikepostController extends Controller
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
     * @param  \App\Http\Requests\StorelikepostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelikepostRequest $request)
    {
        if(Auth::check()){
            $validatedData = $request->validate([
                'user_id' => 'required',
                'post_id' => 'required'
            ]);
            if (likepost::isLiked($validatedData)) {
                likepost::remove($validatedData);
                return back();
            } else {
                likepost::create($validatedData);
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
     * @param  \App\Models\likepost  $likepost
     * @return \Illuminate\Http\Response
     */
    public function show(likepost $likepost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\likepost  $likepost
     * @return \Illuminate\Http\Response
     */
    public function edit(likepost $likepost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelikepostRequest  $request
     * @param  \App\Models\likepost  $likepost
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelikepostRequest $request, likepost $likepost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\likepost  $likepost
     * @return \Illuminate\Http\Response
     */
    public function destroy(likepost $likepost)
    {
        //
    }
}
