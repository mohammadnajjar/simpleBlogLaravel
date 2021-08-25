<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts= Post::all();
//        $posts= Post::get();
        return view('posts.index',compact('posts'));
//        $post= Post::where('id',1)->get();
//        return $post;
//        $post= Post::find(1);
//        return $post;
//        $post= Post::where('id',1)->first();
//        return $post;
//        $post= Post::findOrFail(1);
//        return $post;
//        $post= Post::firstWhere('id',1);
//        return $post;


    }

    public function create()
    {
        return view('posts.addpost');
    }

    public function store(Request $request)
   {
//       Insret 1with save
       $posts=new Post();
       $posts->title = $request->title;
       $posts->body = $request->body;
        $posts->save();
        return redirect()->route('posts.index')->with('add','Added Post');
//
//        return redirect()->back()->with('msg','Added Post');
//        Insret 2 with create
//            Post::create([
//                'title' =>$request->title,
//                'body' =>$request->body,
//            ]);
//      return redirect()->back()->with('msg','Added Post');

    }

    public function show(Post $post)
    {
        //
    }


    public function edit($id)
    {
        $post= Post::findOrFail($id);
        return view('posts.editpost',compact('post'));
    }


    public function update(Request $request, $id)
    {
//        $posts= Post::findOrFail($id);
//        $posts->title = $request->title;
//        $posts->body = $request->body;
//        $posts->save();
//        return redirect()->back()->with('msg','Update Post');
        $posts= Post::findOrFail($id);
//        $posts->update($request->all());
        // important
        $posts->update([
            'title' => $request->title,
             'body' => $request->body,
        ]);
        return redirect()->route('posts.index')->with('msg','Update Post');

    }


    public function destroy($id)
    {
//        Post::findOrFail($id)->delete();
      Post::destroy($id);
      return redirect()->route('posts.index')->with('del','Delete Post');

    }
}
