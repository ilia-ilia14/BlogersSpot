<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/*
 * Controller for the Post
 * This enables users to create store update
 * delete new and existing posts.
 */
class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Get all posts for the selected category
     *
     * @param  int $category_id
     * @param $categoryName
     * @return \Illuminate\Http\Response
     */
    public function getPostsByCategoryId($category_id, $categoryName) {
         $posts = Post::where('Category_Id',$category_id)->orderBy('created_at', 'desc')->paginate(5);
        //return response()->json(['posts'=>$posts]);
        return view('posts.index', compact('posts', 'categoryName'));
    }

    /**
     * Show the form for creating a new post.
     * And gets the resource to choose the type during creation
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
            error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
        }

        //get categories and pass it here
        $categories =  DB::select('SELECT * FROM category');
        return view('posts.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'postbody' => 'required',
            'selectype' => 'required'
        ]);

        $post = new Post;
        $post->Title = $request->input('title');
        $post->Body = $request->input('postbody');
        $post->Category_Id = $request->input('selectype');
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/categories')->with('success', 'Post Created');
    }

    /**
     * Display the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post =  Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show specific form for editing.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post =  Post::find($id);
        $categories =  DB::select('SELECT * FROM category');
        return view('posts.edit', compact('post', 'categories'));
       //  href="{{route('posts.edit', $post->Post_Id)}}"
    }

    /**
     * Update the specified post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'title' => 'required',
            'postbody' => 'required',
            'selecttype' => 'required'
        ]);

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('postbody');
        $post->Category_Id = $request->input('selecttype');
        $post->save();

        return redirect('/categories')->with('success', 'Post Edited');
    }

    /**
     * Remove the specified post from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->Delete();
        return redirect('/categories')->with('success', 'Post deleted');
    }
}
