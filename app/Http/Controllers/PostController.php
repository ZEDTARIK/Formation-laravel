<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;
use illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        DB::connection()->enableQueryLog();
        $posts = Post::all(); // Method Leasy
        $postEggers = Post::with('comments')->get(); // Method Eaggers

        foreach($postEggers as $post) {
            foreach($post->comments as $comment) {
                dump($comment);
            }
        }
        dd(DB::getQueryLog());

        $posts = Post::cursor();
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePost $request)
    {

        $data = $request->only(['title', 'body']);
        $data['slug'] = Str::slug($data['body'], '-');
        $data['active'] = true;
        $post = Post::create($data);
        $request->session()->flash('status', 'Post Successfully Created !!');
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePost $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->slug = Str::slug($request->input('body'), '--');
        $post->active = false;

        $post->save();
        $request->session()->flash('status', 'Post Successfully Updated !!');
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        // $post = Post::findOrFail($id);
        // $post->delete();

        Post::destroy($id);

        $request->session()->flash('status', 'Post Successfully Deleted !!');
        return redirect()->route('posts.index');
    }
}
