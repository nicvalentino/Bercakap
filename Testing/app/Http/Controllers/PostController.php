<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\comment;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorepostRequest;
use App\Http\Requests\UpdatepostRequest;

class PostController extends Controller
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
     * @param  \App\Http\Requests\StorepostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepostRequest $request)
    {
        if(Auth::check()){
            $validatedData = $request->validate([
                'user_id' => 'required',
                'title' => 'required',
                'body' => 'required',
            ]);
            $validatedData['excerpt'] = Str::limit(strip_tags($validatedData['body']), 200);
            post::create($validatedData);
            return back();
        } else {
            return redirect('/login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */


    public function show(post $post)
    {
        if(Auth::check()){
            $post->incrementViews();
            $temp = post::first()->where('id', $post->id)->withCount('comments')->withCount('likeposts')->withCount('dislikeposts')->get();
            $comments_count = $temp[0]->comments_count;
            $likeposts_count = $temp[0]->likeposts_count;
            $dislikeposts_count = $temp[0]->dislikeposts_count;
            return view( 'Postingan1', [
                'isLoggedIn' => Auth::check(),
                'user' => Auth::user(),
                'post' => $post,
                'comments_count' => $comments_count,
                'likeposts_count' => $likeposts_count,
                'dislikeposts_count' => $dislikeposts_count,
                'comments' => comment::latest()->where('post_id' , $post->id)->withCount('likecomments')->withCount('dislikecomments')->get(),
            ]);
        } else {
            return redirect('/login');
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        if(Auth::check()){
            $temp = post::first()->where('id', $post->id)->withCount('comments')->withCount('likeposts')->withCount('dislikeposts')->get();
            $comments_count = $temp[0]->comments_count;
            $likeposts_count = $temp[0]->likeposts_count;
            $dislikeposts_count = $temp[0]->dislikeposts_count;
            return view( 'EditPostingan', [
                'isLoggedIn' => Auth::check(),
                'user' => Auth::user(),
                'post' => $post,
                'comments_count' => $comments_count,
                'likeposts_count' => $likeposts_count,
                'dislikeposts_count' => $dislikeposts_count,
                'comments' => comment::latest()->where('post_id' , $post->id)->withCount('likecomments')->withCount('dislikecomments')->get(),
            ]);
        } else {
            return redirect('/login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepostRequest  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepostRequest $request, post $post)
    {
        if(Auth::check()){
            $validatedData = $request->validate([
                'title' => 'required',
                'body' => 'required',
            ]);
            $validatedData['excerpt'] = Str::limit(strip_tags($validatedData['body']), 500);
            post::where('id', $post->id)->update($validatedData);
            return redirect('/home');
        } else {
            return redirect('/login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        post::destroy($post->id);
        return redirect('/home');
    }
}
