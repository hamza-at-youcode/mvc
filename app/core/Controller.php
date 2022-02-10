<?php


class Controller{

    protected function getModelInstance($model){
        // ! check if model exists
        require_once '../app/models/'.$model.'.php';
        return new $model;
    }

    public function view($view,$data = []){
        require_once '../app/views/'.$view.'.php';
    }



}