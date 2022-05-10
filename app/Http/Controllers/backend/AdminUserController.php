<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminUserController extends Controller
{

//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
    public function __construct(User $user, Role $role, Post $post)
    {
        $this->user = $user;
        $this->role = $role;
        $this->post = $post;
    }

    public function index()
    {
        $users = $this->user->all();
        return view('backend.user_admin.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = $this->role->all();
        return view('backend.user_admin.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        ///////----------Validator--------///////
        $roles = [
            'InputName' => 'bail|required|max:255|min:6',
            'InputEmail' => 'required|required|max:255|min:10',
            'InputPass' => 'required|max:255|min:6',
            'Role_Id' => 'required',

        ];
        $messages = [
            'required' => ':attribute không được để trống',
            'max' => ':attribute không được quá 255 kí tự',
            'min' => ':attribute không được ngắn hơn 6 kí tự',
            'unique:posts' => 'Chỉ được chọn 1 :attribute',
        ];
        $attributes = [
            'InputName' => 'Tên tài khoản',
            'InputEmail' => 'Egmail ',
            'InputPass' => 'Mật khẩu',
            'Role_Id' => 'Quyền'

        ];
        $validator = Validator::make($request->all(), $roles, $messages, $attributes);
        if ($validator->fails()) {
            return redirect('admin/user/create')
                ->withErrors($validator)
                ->withInput();
        }


        $user = $this->user->create([
            'name' => $request->InputName,
            'password' => Hash::make($request->InputPass),
            'email' => $request->InputEmail,
        ]);
//        dd($request->InputName);
        $user->roles()->attach($request->Role_Id);
        return redirect()->route('admin.user');
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
        $roles = $this->role->get();
        $user = $this->user->find($id);
        $role_of_user = $user->roles;

        return view('backend.user_admin.edit', compact('roles', 'user', 'role_of_user'));
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
        user::find($id)->update([
            'name' => $request->InputName,
            'password' => Hash::make($request->InputPass),
            'email' => $request->InputEmail,
        ]);
        $user = user::find($id);
        $user->roles()->sync($request->Role_Id);
        return redirect()->route('admin.user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = user::find($id);

        return redirect()->route('admin.user');
    }
}
