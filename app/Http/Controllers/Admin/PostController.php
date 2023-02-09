<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostFormRequest;
use App\Models\Post as Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $posts = Post::query()->orderBy("created_at", "DESC")->paginate(4);
        return view("admin.posts.index", [
            "posts" => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view("admin.posts.create", []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PostFormRequest  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function store(PostFormRequest $request)
    {

        if ($request->hasFile('thumbnail')){
            $request->thumbnail->store('posts', 'public');
            Post::create([
                "title" => $request->get('title'),
                "preview" => $request->get('preview'),
                "description" => $request->get('description'),
                "thumbnail" => $request->thumbnail->hashName()
            ]);
        }

        return redirect(route("admin.posts.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view("admin.posts.create", [
            "post" => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PostFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
      */
    public function update(PostFormRequest $request, $id)
    {
        $post = Post::findOrFail($id);

        $data = $request->validated();

        if ($request->has("thumbnail")) {
            $thumbnail = str_replace("public/posts", "", $request->file("thumbnail")->store("public/posts"));
            $data["thumbnail"] = $thumbnail;
        }

        $post->update($data);

        return redirect(route("admin.posts.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function destroy($id)
    {
        Post::destroy($id);

        return redirect(route("admin.posts.index"));
    }
}
