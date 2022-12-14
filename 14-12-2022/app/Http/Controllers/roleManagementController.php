<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

use Spatie\Permission\Models\Role;

class roleManagementController extends Controller
{
    function roleMangementPage()
    {
        $allRole = Role::all();
        $allPermission = Permission::all();
        $allUsers = User::all();
        return view("admin.roleManagement.role",[
            'allPermission' => $allPermission,
            'allRole' => $allRole,
            'allUsers' => $allUsers,
        ]);
    }

    function addPermission(Request $req)
    {
        Permission::create([
            'name' => $req->permission,         
        ]);

        return back();
    }




    function addRole(Request $req){
        $role = Role::create(['name' => $req->roleName,]);
        $role->givePermissionTo($req->permission);

        return back();
    }
    
    
    function assignRole(Request $req){
       $findUser = User::find($req->userNamesId);
       $findUser->assignRole($req->roleNamesId);

       return back();
    }


    function removeRole($removeRoleid){

        $findUser = User::find($removeRoleid);
        $findUser->syncRoles([]);
        $findUser->syncPermissions([]);
        return back();


    }
}
