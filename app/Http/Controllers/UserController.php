<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Services\UserService;
use Exception;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    private $service;

    function __construct(){
        $this->service =  new UserService();
    }

    public function index()
    {
        $users = $this->service->paginate();
        return Inertia::render('Users',compact('users'));
    }

    public function store(UserRequest $request){
       $request->validate(["password" => ["required"], "confirm_password" => ["required"]]);
       try{
            $this->service->save($request->all());
            return to_route('users.index');
       }catch(Exception){
            dd("store");
       }
    }

    public function update(UserRequest $request, User $user){
       try{
            $this->service->update($request->all(), $user);
            return to_route('users.index');
        }catch(Exception){
            dd("update");
        }
    }

    public function destroy(User $user){
        try{
            $this->service->delete($user);
            return to_route('users.index');
        }catch(Exception){
            dd("delete");
        }
    }



}
