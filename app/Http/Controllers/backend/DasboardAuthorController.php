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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $postOfUser = $user->postUser;
        return view('backend.post_author.index', compact('posts', 'user', 'postOfUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topics = $this->topic->all();
        return view('backend.post_author.create', compact('topics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id = 0)
    {
        $post = [
            'title' => $request->InputTitle,
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
        $user = $this->user->find($id);
        $posts = $this->post->all();
        $postOfUser = $user->postUser;
        return redirect()->route('admin.author.home', compact('postOfUser'));
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
        $topics = $this->topic->all();
        $posts = $this->post->find($id);
        return view('backend.post_author.edit', compact('topics', 'posts'));
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
        $post = [
            'title' => $request->InputTitle,
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
        post::find($id)->update($post);
        $posts = post::get();

        return redirect()->route('admin.author.home', compact('posts'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::find($id)->delete();
        user::where('id', $id)->delete();
        topic::where('id', $id)->delete();
        return view('backend.post_author.index');
    }

}
