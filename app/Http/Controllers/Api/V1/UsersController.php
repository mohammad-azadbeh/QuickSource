<?php
namespace App\Http\Controllers\Api\V1;

use App\User;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller

{
    use FileUploadTrait;

    public function index()
    {
        return User::all();
    }

    public function get($id)
    {
        $user  = User::findOrFail($id);
        return $user;
    }

    public function create(Request $request)
    {
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);

        return $user;
    }

    public function update(Request $request)
    {
        $user = User::findOrFail($request->get('id'));
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user->update($input);

        return $user;
    }

    public function delete($id)
    {
        return User::destroy($id);
    }
}