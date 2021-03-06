<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;


class ajaxLoginController extends Controller
{
    public function __construct(Post $post, User $user, Comment $comment)
    {
        $this->Comment = $comment;
        $this->Post = $post;
        $this->User = $user;
    }

//    public function login(Request $request, $post)
//    {
//        $check_login = Auth::user()->id;
//    }


    public function comment(Request $request, $post)
    {
        $data = [
            'user_id' => Auth::user()->id,
            'post_id' => $post,
            'content' => $request->comment,
            'parent_id' => $request->parent_id ? $request->parent_id : 0,
        ];

        if (Comment::create($data)) {
            $comments = Comment::where(['post_id' => $post])->where(['parent_id' => 0])->where('status','=', 1)->orderBy('id', 'desc')->get();

            return view('frontend.list_comment', compact('comments'));
        }
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
