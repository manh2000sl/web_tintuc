<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class AdminRoleController extends Controller
{
    public function __construct(Role $role, Permission $permission)
    {

        $this->role = $role;
        $this->permission = $permission;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::get();
        return view('backend.Role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        $permission_parent = $this->permission->where('parent_id', 0)->get();
//        return view('backend.Role.create', compact('permission_parent'));
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param \Illuminate\Http\Request $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//        $role = $this->role->create([
//            'name' => $request->name,
//        ]);
//        $role->permissions()->attach($request->permission_id);
//        return redirect()->route('admin.role');
//
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param int $id
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
//        //
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param int $id
//     * @return \Illuminate\Http\Response
//     */
//    public function edit($id)
//    {
//        $permission_parent = $this->permission->where('parent_id', 0)->get();
//        $role = $this->role->find($id);
//        $checked = $role->permissions;
//        return view('backend.Role.edit', compact('permission_parent', 'role', 'checked'));
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param \Illuminate\Http\Request $request
//     * @param int $id
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, $id)
//    {
//        $this->role->find($id)->update([
//            'name' => $request->name,
//        ]);
//        $role = $this->role->find($id);
//        $role->permissions()->sync($request->permission_id);
//        return redirect()->route('admin.role');
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param int $id
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy($id)
//    {
//        $role = role::find($id);
//        $role->delete();
//        return redirect()->route('admin.role');
//    }
}
