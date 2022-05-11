<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Topic;
use App\Models\User;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DasboardAuthorController extends Controller
{
    use StorageImageTrait;

    protected $post;
    protected $user;
    protected $topic;

    public function __construct(Post $post, User $user, Topic $topic)
    {
        $this->middleware('auth');
        $this->post = $post;
        $this->user = $user;
        $this->topic = $topic;
    }

    public function index($id = 0)
    {
        if ($id == 0) {
            $id = Auth::user()->id;
        }
        $user = $this->user->find($id);
        $posts = $this->post->all();
        $post_of_user = $user->postUser;
        return view('backend.post_author.index', compact('posts', 'user', 'post_of_user'));
    }


    public function create()
    {
        $topics = $this->topic->all();
        return view('backend.post_author.create', compact('topics'));
    }


    public function store(Request $request, $id = 0)
    {
        $post = [
            'title' => $request->input_title,
            'slug' => $request->convert_slug,
            'topic' => $request->input_topic,
            'summary' => $request->summernote,
            'content' => $request->summernote2,
            'user_id' => auth()->id(),
        ];
        $data = $this->storageTraitUpload($request, 'exampleInputFile', 'post');
        if (!empty($data)) {
            $post['image'] = $data['fileName'];
            $post['image_path'] = $data['filePath'];
        }
        $this->post->create($post);
        if ($id == 0) {
            $id = Auth::user()->id;
        }
        return redirect()->route('admin.author.home');
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $topics = $this->topic->get();
        $posts = $this->post->find($id);
        return view('backend.post_author.edit', compact('topics', 'posts'));
    }

    public function update(Request $request, $id)
    {
        $post = [
            'title' => $request->input_title,
            'slug' => $request->convert_slug,
            'topic' => $request->input_topic,
            'summary' => $request->summernote,
            'content' => $request->summernote2,
//            'highlight'=>$request->iput_hight,
            'user_id' => auth()->id(),
        ];
        $data = $this->storageTraitUpload($request, 'exampleInputFile', 'post');
        if (!empty($data)) {
            $post['image'] = $data['fileName'];
            $post['image_path'] = $data['filePath'];
        }
        Post::find($id)->update($post);
        return redirect()->route('admin.author.home');
    }


    public function destroy($id)
    {
        Post::where('id', $id)->delete();
        return view('backend.post_author.index');
    }

}
