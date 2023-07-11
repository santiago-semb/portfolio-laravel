<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.blog', compact('blogs'));
    }

    public function show(Blog $blog)
    {
        $blog = Blog::all()->find($blog);
        return view('blog.ver-blog', compact('blog'));
    }

    public function create()
      {
          return view('ADMIN.blogs.crear-blog');
      }
  
      public function store(Request $request)
      {
          $blog = new Blog;
          $blog->persona_id = 1;
          $blog->titulo = $request->titulo;
          $blog->imagen = $request->imagen;
          $blog->contenido = $request->contenido;
          $blog->save();     
          return redirect()->route('blog.index');
      }
  
      public function destroy(Blog $blog)
      {
          $blog->delete();
          return redirect()->route('blog.index');
      }
  
      public function edit(Blog $blog)
      {
          return view('ADMIN.blogs.editar-blog', compact('blog'));
      }
  
      public function update(Request $request)
      {
          $blogUpdate = Blog::all()->find($request->id);
          $blogUpdate->titulo = $request->titulo;
          $blogUpdate->imagen = $request->imagen;
          $blogUpdate->contenido = $request->contenido;
          $blogUpdate->update();
          return redirect()->route('blog.index');
      }
}
