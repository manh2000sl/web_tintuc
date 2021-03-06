<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Topic;
use App\Models\User;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;


class DasboardController extends Controller
{
    use StorageImageTrait;

    private $title = 'Bài viết';

    public function __construct(Topic $topic, Post $post, User $user)
    {
        $this->Topic = $topic;
        $this->Post = $post;
        $this->User = $user;
    }


    public function index(Request $request)
    {
        if ($request->ajax()) {
            $model = Post::with('toUser');
            return DataTables::eloquent($model)
                ->addColumn('toUser', function (Post $post) {
                    return $post->toUser->name;
                })
                ->toJson();
        }
        return view('backend.post.index');
    }
    public function api(Request $request)
    {
        if ($request->ajax()) {
            $model = Post::with('toUser', 'toTopic');
            return DataTables::eloquent($model)
                //thêm cột
                ->addColumn('toUser', function (Post $post) {
                    return $post->toUser->name;
                })
                ->addColumn('toTopic', function (Post $post) {
                    return $post->toTopic->name;
                })
                //sửa cột
                ->editColumn('updated_at', function ($object) {
                    return $object->updated_at->format('Y-m-d H:i:s');
                })
                ->editColumn('status', function ($object) {
                    return $object->status_name;
                })
                ->editColumn('highlight', function ($object) {
                    return $object->highlight_name;
                })
                ->addColumn('edit', function ($object) {
                    return route('admin.edit', $object);
                })
                ->addColumn('delete', function ($object) {
                    return route('admin.destroy', $object);
                })
                ->toJson();
        }
    }

    public function create()
    {
        $topics = Topic::all();
        return view('backend.post.create', compact('topics'));
    }

    public function store(Request $request)
    {
        ///////----------Validator--------///////
        $roles = [
            'input_title' => 'bail|required|max:255|min:20',
            'convert_slug' => 'required',
            'exampleInputFile' => 'required',
            'summernote' => 'required',
            'summernote2' => 'required',
        ];
        $messages = [
            'required' => ':attribute không được để trống',
            'max' => ':attribute không được quá 255 kí tự',
            'min' => ':attribute không được ngắn hơn 20 kí tự',
            'unique:posts' => 'Chỉ được chọn 1 :attribute',

        ];
        $attributes = [
            'input_title' => 'Tiêu đề',
            'convert_slug' => 'slug',
            'input_topic' => 'Danh mục',
            'exampleInputFile' => 'Ảnh',
            'summernote2' => 'Nội dung',
            'summernote' => 'Tóm tắt',
        ];
        $validator = Validator::make($request->all(), $roles, $messages, $attributes);
        if ($validator->fails()) {
            return redirect('admin/create')
                ->withErrors($validator)
                ->withInput();
        }

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
        Post::create($post);
        return redirect()->route('admin.home');
    }

    public function edit($id)
    {
        $topics = Topic::get();
        $posts = Post::find($id);
        if (empty($posts)) {
            return redirect()->route('admin.home')->withErrors('Bài viết không tồn tại');
        }
        $topicsOfPost = $posts->toTopic;
        $comments = Comment::where(['post_id' => $posts->id])->where(['parent_id' => 0])->orderBy('id', 'desc')->paginate(10);
        return view('backend.post.edit', compact('topics', 'posts', 'topicsOfPost', 'comments'));
    }

    public function update(Request $request, $id)
    {
        $post = [
            'title' => $request->input_title,
            'slug' => $request->convert_slug,
            'topic' => $request->input_topic,
            'summary' => $request->summernote,
            'content' => $request->summernote2,
            'status' => $request->status,
            'highlight' => $request->highlight,
        ];
        $data = $this->storageTraitUpload($request, 'exampleInputFile', 'post');
        if (!empty($data)) {
            $post['image'] = $data['fileName'];
            $post['image_path'] = $data['filePath'];
        }
        if (!empty($request->status_comment)) {
            //duyệt lấy key và value của request
            foreach ($request->status_comment as $comment_id => $comment_status) {
                $comment_status = [
                    'status' => $comment_status
                ];
                Comment::where('id', $comment_id)->update($comment_status);
            }
        }
        $post = Post::where('id', $id)->update($post);
        return redirect()->route('admin.home', compact('post'));
    }

    public function destroy($id)
    {
        Comment::where(['post_id' => $id])->delete();
        Post::where('id', $id)->delete();
        return redirect()->route('admin.home');
    }

    public function approveComment(Request $request)
    {
        try {
            $comment_id = $request->comment_id;
            $status = $request->status;
            $comment_status = [
                'status' => $status
            ];
            Comment::where('id', $comment_id)->update($comment_status);
            return response()->json([
                'status' => 1,
                'message' => "Cập nhật trạng thái thành công"
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'status' => 0,
                'message' => "Có lỗi xảy ra trong quá trình cập nhật. Vui lòng thử lại sau"
            ]);
        }
    }
}
