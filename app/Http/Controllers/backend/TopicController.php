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

    public function store(Request $request)
    {
        Topic::create([
            'name' => $request->input_title,
        ]);
        return redirect()->route('admin.topic');
    }
    public function show($id)
    {

    }
    public function edit($id)
    {
        $topic = Topic::find($id);
        return view('backend.topic.edit', compact('topic'));
    }
    public function update(Request $request, $id)
    {
        Topic::where('id',$id)->update([
            'name' => $request->input_title,
            'slug' => $request->convert_slug,
        ]);
        return redirect()->route('admin.topic');
    }
    public function destroy($id)
    {
        Topic::where('id',$id)->delete();
        Post::where('topic', $id)->delete();
        return redirect()->route('admin.topic');
    }
}
