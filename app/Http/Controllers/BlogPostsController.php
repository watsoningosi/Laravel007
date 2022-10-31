<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BlogPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('pages.home', [
            'post' => BlogPost::all()
        ]);
    }

    public function indexAdmin()
    {
        $posts = DB::select('select * from blog_posts');
        return view('home', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BlogPost::create(request()->validate([
            'title' => 'required',
            'exerpt' => 'required',
            'body' => 'required'

        ]));

        return redirect('/pages/create')
            ->with('success', 'Your Article has been submitted Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */

    public function show(BlogPost $posts)
    {
        // $posts = BlogPost::findOrFail($id);
        // return $posts;

        return view('pages.posts', ['posts' => $posts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */

    public function edit(BlogPost $blogPost)
    {
        return view('pages.edit', [
            'post' => $blogPost,
        ]); //returns the edit view with the post
    }
    public function edit1(BlogPost $post)
    {
        // $post = BlogPost::find($id);
        return view('pages.edit', compact('post'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update2(Request $request, BlogPost $post)
    {
        $post->update([
            'title' => $request->title,
            'exerpt' => $request->exerpt,
            'body' => $request->body
        ]);

        return redirect('home');
    }
    public function update(Request $request, BlogPost $BlogPost)
    {
        $BlogPost->update(request()->validate([
            //'title' =>['required','min:3','max:255']
            'title' => 'required',
            'exerpt' => 'required',
            'body' => 'required'
        ]));

        return redirect('/')
            ->with('success', 'Your Article has been updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        DB::delete('DELETE from Blog_posts where id = ?', [$id]);

        echo ("Post deleted succesfully");

        return redirect('home');
    }
}
