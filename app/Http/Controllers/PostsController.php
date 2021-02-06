<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostsModel;
use App\PostInfModel;
use App\CategoryModel;
use App\TagModel;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PostsModel::all();
        return view("home", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories = CategoryModel::all();
        $tags = TagModel::all();
        return view("create_data", compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $createPost = new PostsModel();
        $createPost->title = $request->input('inputPostTitle');
        $createPost->author = $request->input("inputPostAuthor");
        $createPost->category_id = $request->input("inputPostCategory");
        $createPost->save();

        
        $createPostInf = new PostInfModel();
        $createPostInf->post_id = $createPost->id;
        $createPostInf->description = $request->input("inputPostDesc");
        $createPostInf->slug = "prova-slug";
        $createPostInf->save();

        
        $tags = $request->input("inputPostTag");
        foreach ($tags as $tag) {
            $createPost->postTag()->attach($tag);
        }

        $data = PostsModel::find($createPost->id);
        return view('detail_post', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = PostsModel::find($id);
        return view('detail_post', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = PostsModel::find($id);
        $categories = CategoryModel::all();
        $tags = TagModel::all();
        return view('edit_data', compact('data', 'categories', 'tags'));
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
        
        $updatePost = PostsModel::find($id);
        $updatePost->postTag()->detach();
        $updatePost->title = $request['inputPostTitle'];
        $updatePost->author = $request["inputPostAuthor"];
        $updatePost->category_id = $request["inputPostCategory"];
        $updatePost->save();

        
        $updatePostInf = PostInfModel::where('post_id', $updatePost->id)->first();
        $updatePostInf->description = $request["inputPostDesc"];
        $updatePostInf->slug = "prova-slug";
        $updatePostInf->save();

        
        $updatePost->postTag()->attach($request->input("inputPostTag"));

        $data = PostsModel::find($updatePost->id);
        return view('detail_post', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
