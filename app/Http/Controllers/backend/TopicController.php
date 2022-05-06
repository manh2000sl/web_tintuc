<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Role;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TopicController extends Controller
{


    public function __construct(Topic $topic, Post $post)
    {
        $this->middleware('auth');
        $this->topic = $topic;
        $this->post = $post;
    }

    public function index()
    {
        $topics = Topic::orderby('id', 'desc')->get();
        return view('backend.topic.index', compact('topics'));
    }


    public function create()
    {
        return view('backend.topic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        topic::create([
            'name' => $request->InputTitle,
        ]);
//        dd($request->InputTitle);

        return redirect()->route('admin.topic');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topic = topic::find($id);
        return view('backend.topic.edit', compact('topic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        topic::find($id)->update([
            'name' => $request->InputTitle,
            'slug' => $request->convert_slug,
        ]);
        return redirect()->route('admin.topic');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        topic::find($id)->delete();
        post::where('topic', $id)->delete();
        return redirect()->route('admin.topic');
    }
}
