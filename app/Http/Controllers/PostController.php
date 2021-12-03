<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function testDB() {
        // $users = DB::table('users')
        //     ->select(DB::raw("CONCAT(first_name, ' ', last_name) as name"), "email as user_email")
        //     ->get();
        // $posts = DB::table('posts')
        //     ->select('title','body')
        //     ->whereRaw('posts.user_id != ?', [1])
        //     ->get();

        $posts = DB::table('posts')
            ->join('users', 'posts.user_id', '=','users.id')
            ->select(
                'posts.id as post_id',
                'posts.title',
                'posts.body',
                DB::raw('CONCAT(users.first_name, " ", users.last_name) as author'),
                'posts.created_at'
            )->get();

       // $posts = Post::with('user')->get();
        
        dd($posts);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('user')->get();

        return view('posts.main', [ 'posts' => $posts ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::with('user')->where('id', $id)->get();

        if (count($post) == 0)
            return redirect()->route('posts.main');

        return view('posts.show', [ 'post' => $post[0]]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
