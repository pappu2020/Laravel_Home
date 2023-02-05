<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Http\Request;

class roleController extends Controller
{
    function rolePage(){
        $allRole = Role::all();
        $allPermission = Permission::all();
        $allUsers = User::all();
        
        return view("admin.role.rolePage",[
            'allPermission' => $allPermission,
            'allRole' => $allRole,
            'allUsers' => $allUsers,
        ]);
    }
    
    
    
    
    function addPermission(Request $req){
        Permission::create(['name' => $req ->permission]);
        return back()->with('insertSuccess', "Insert success!!"); 
    }
    
    
    function addRole(Request $req){

        $role = Role::create(['name' => $req->roleName,]);
        $role->givePermissionTo($req->permission);

        return back()->with('insertSuccess', "Insert success!!"); 
       
    }



    function assignRole(Request $req)
    {

       
        
        $findUser = User::find($req->userNamesId);
        $findUser->assignRole($req->roleNamesId);

        return back();
    }

    function removeRole($removeRoleid)
    {

        $findUser = User::find($removeRoleid);
        $findUser->syncRoles([]);
        $findUser->syncPermissions([]);
        return back();
    }


    function roleUpdatePage($editRolePermissionid){
        $allRole = Role::where("id", $editRolePermissionid)->get();
        $allPermission = Permission::all();
        return view("admin.role.roleUpdatePage",[
            'allPermission' => $allPermission,
            'allRole' => $allRole,
        ]);
    }


    function rolePermissionUpdate(Request $req)
    {
        $rolePermissionUpdate = Role::find($req->roleId);

        $rolePermissionUpdate->syncPermissions([$req->permission]);

        return back()->with("updateSuccess", "New permission added successfully!!");
    }



}
