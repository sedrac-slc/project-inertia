<?php

namespace App\Services;

use App\Interfaces\IService;
use App\Util\ResponseEntity;
use Exception;

class Service implements IService{

    private const MESSAGE = "Implement method";

    protected $request;

    //protected $response;

    function __construct($request = null){
        $this->request = $request;
        //$this->response = new ResponseEntity();
    }

    protected function validate(): bool{ return isset($this->request); }

    function __get($name){ return $this->$name; }

    function __set($name, $value) { $this->$name = $value; }

    // private function responseParams($body, $entityName, $status, $method, $message){
    //     $this->response->body = $body;
    //     $this->response->entityName = $entityName;
    //     $this->response->status = $status;
    //     $this->response->method = $method;
    //     $this->response->message = $message;
    // }

    // final function responseCreate($body, $method = "POST", $entityName = "NONE"){
    //     $this->responseParams($body, $entityName, 201, $method,"");
    // }

    // final function responseUpdate($body, $method = "PUT", $entityName = "NONE"){
    //     $this->responseParams($body, $entityName, 200, $method,"");
    // }

    // final function responseError(Exception $e, $method = "NONE", $entityName = "NONE"){
    //     $this->responseParams(null, $entityName, 404, $method, $e->getMessage());
    // }


    function save($data = []){new Exception(Service::MESSAGE);}

    function update($data = [], $model){new Exception(Service::MESSAGE);}

    function delete($model){new Exception(Service::MESSAGE); }

    function findById($id){new Exception(Service::MESSAGE);}

    function all(){new Exception(Service::MESSAGE);}

    function paginate(){ new Exception(Service::MESSAGE); }

}
