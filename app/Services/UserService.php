<?php

namespace App\Services;

use App\Models\User;
use App\Services\Service;

class UserService extends Service {

    function save($data = []){
        if($this->validate()) $this->request->validate($data);
        return User::create($data);
    }

    function update($data = [], $model){
        if($this->validate()) $this->request->validate($data);
        if(!isset($model->id)) return;
        $model->update($data);
    }

    function delete($model){
        if(!isset($model->id)) return;
        $model->delete();
    }

    function findById($id){
        return User::find($id);
    }

    function all(){ return User::orderBy(User::CREATED_AT,'DESC')->get(); }

    function paginate(){ return User::orderBy(User::CREATED_AT,'DESC')->paginate(); }

}
