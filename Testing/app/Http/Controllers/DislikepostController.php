<?php

namespace App\Http\Controllers;

use App\Models\dislikepost;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoredislikepostRequest;
use App\Http\Requests\UpdatedislikepostRequest;

class DislikepostController extends Controller
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
     * @param  \App\Http\Requests\StoredislikepostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredislikepostRequest $request)
    {
        if(Auth::check()){
            $validatedData = $request->validate([
                'user_id' => 'required',
                'post_id' => 'required'
            ]);
            if (dislikepost::isLiked($validatedData)) {
                dislikepost::remove($validatedData);
                return back();
            } else {
                dislikepost::create($validatedData);
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
     * @param  \App\Models\dislikepost  $dislikepost
     * @return \Illuminate\Http\Response
     */
    public function show(dislikepost $dislikepost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dislikepost  $dislikepost
     * @return \Illuminate\Http\Response
     */
    public function edit(dislikepost $dislikepost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedislikepostRequest  $request
     * @param  \App\Models\dislikepost  $dislikepost
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedislikepostRequest $request, dislikepost $dislikepost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dislikepost  $dislikepost
     * @return \Illuminate\Http\Response
     */
    public function destroy(dislikepost $dislikepost)
    {
        //
    }
}
