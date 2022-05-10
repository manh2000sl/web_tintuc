<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Topic;

use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    use StorageImageTrait;

    public function __construct(Topic $topic, Post $post )
    {
        $this->Topic = $topic;
        $this->Post = $post;

    }
    public function index(Request $request){
        $topics = Topic::whereIn('id',[id_topic_chinh_tri,id_topic_doi_song,id_topic_khoa_hoc])->get();
    //danh sách bài viết chính trị
        $topics13 = $topics->where('id',id_topic_chinh_tri)->first();
        $postOfId13 = Post::where('topic',id_topic_chinh_tri)->where('status', '=', '1')->orderBy('id', 'desc')->limit(limit_post)->get();
        //danh sách bài viết Khoa học
        $topics26 = $topics->where('id',id_topic_doi_song)->first();
        $postOfId26 = Post::where('topic',id_topic_doi_song)->where('status', '=', '1')->orderBy('id', 'desc')->limit(limit_post)->get();
        //danh sách bài viết Đời sống
        $topics29 = $topics->where('id',id_topic_khoa_hoc)->first();
        $postOfId29 = Post::where('topic',id_topic_khoa_hoc)->where('status', '=', '1')->orderBy('id', 'desc')->limit(limit_post)->get();
        return view('frontend.main', compact( 'topics13', 'postOfId13',
            'topics26', 'postOfId26',
            'topics29', 'postOfId29'
        ));
    }

    public function detail($slug)
    {
        $post = Post::where('slug', '=', $slug)->with('toTopic')->first();
        $comment1=[];
        if (!empty($post)) {
            $comment1 = $post->comments()->where('status', '=', '1')->with('user')->orderBy('id', 'desc')->get();
        }
        return view('frontend.post_detail', compact( 'post','comment1'));
    }
    public function show($slug)
    {

        $topics_1 = Topic::where('slug', '=', $slug)->first();
        $postOfIds=[];
        if (!empty($topics_1)) {
            $postOfIds = Post::where('topic', $topics_1->id)->where('status', '=', '1')->orderBy('id', 'desc')->get();
        }
        return view('frontend.list_post', compact('postOfIds', 'topics_1'));
    }

}
