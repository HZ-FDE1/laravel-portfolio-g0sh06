<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Client\HttpClientException;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
//    public static function index(Request $request)
//    {
//    $param  = request('id');
//
//    if ($request->is('blog/*')) {
//        if ($param === 'posOne' || $param === 'posTwo') {
//            return self::show($param);
//        } else {
//            $exception = new HttpClientException('Such indexed page does not exist');
//            report($exception);
//            return "Try again"; // This line will now be reached
//        }
//    }
//    }

    public function index()
    {
        return view('blogs.index', [
            'blogs' => Blog::all()
        ]);
    }

    public function create() {
        return view('blogs.create');
    }

    public function store(Request $request) {
        $blog = new Blog();
        $blog->title = request()['title'];
        $blog->description = request()['description'];
        $blog->save();
        return redirect()->route('blog.index')->with('success', 'New Blog created');
    }

    public function update(Post $post) {
        return view('blogs.edit', [
           'post' => $post
        ]);
    }

    public function edit(Request $request, Blog $blog) {
        $blog->title = request()['title'];
        $blog->description = request()['description'];
        $blog->save();
        return redirect()->route('blog.show', $blog);

    }

    public function show(Blog $blog) {
        return view('blogs.show', [
            'blog' => $blog
        ]);
    }

    public function destroy(Blog $blog) {
        return view('blogs.delete', [
           'blog' => $blog
        ]);
    }

    public function delete(Blog $blog) {
      $blog->delete();
      return redirect()->route('blog.index');
    }
}
