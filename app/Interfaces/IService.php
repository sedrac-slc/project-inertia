<?php

namespace App\Interfaces;

interface IService{
    function save($data = []);
    function update($data = [], $model);
    function delete($model);
    function findById($id);
    function all();
    function paginate();
}
