<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

use Image;
class PostController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function create()
    {
        return view('post');
    }

    public function store(Request $request)
    {   
         $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'featured_image' => 'image|nullable|max:1999'
        ]);

        $post =  new Post;
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->category = $request->get('category');
        $post->video = $request->get('video');

         if ($request->hasFile('featured_image'))
         {
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(800,527)->save($location);
            $post->image = $filename;
         }
          else {
            $filename = 'noimage.jpg';
        }

        $post->save();

        return redirect('posts');
    }

    public function index()
    {   
        $posts = Post::all();
        //return Post::where('title', 'Post Two')->get();
        //$posts = DB::select('SELECT * FROM posts');
        //$posts = Post::orderBy('title','desc')->take(1)->get();
        //$posts = Post::orderBy('title','desc')->get();

        $posts = Post::select('id', 'title')->get();
        $posts = Post::orderBy('category','asc')->paginate(10);
        return view('index', compact('posts'));
    }



    public function show($id)
    {
        $post = Post::find($id);
        return view('show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);

        // Check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }

        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

         // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }

        // Create Post
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        if($request->hasFile('cover_image')){
            $post->cover_image = $fileNameToStore;
        }
        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        // Check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }

        if($post->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$post->cover_image);
        }
        
        $post->delete();
        return redirect('/posts')->with('success', 'Post Removed');
    }
}
