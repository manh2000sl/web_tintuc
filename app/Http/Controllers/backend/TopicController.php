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
        topic::create([
            'name' => $request->InputTitle,
        ]);
//        dd($request->InputTitle);

        return redirect()->route('admin.topic');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $topic = topic::find($id);
        return view('backend.topic.edit', compact('topic'));
    }

    public function update(Request $request, $id)
    {
        topic::where('id',$id)->update([
            'name' => $request->InputTitle,
            'slug' => $request->convert_slug,
        ]);
        return redirect()->route('admin.topic');
    }

    public function destroy($id)
    {
        topic::where('id',$id)->delete();
        post::where('topic', $id)->delete();
        return redirect()->route('admin.topic');
    }
}
