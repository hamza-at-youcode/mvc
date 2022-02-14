<?php


class Blog{

    public function getBlogs(){
        // select...
        //...
        $blogs = [['title'=>'My first blog','text' => 'This is m.........'],['title' => 'This is my second','text' => 'Hello every one......']];
        return $blogs;
    }
    
    public function getBlogById($id){
        // select...
        //...
        $blogs = [['title'=>'My first blog','text' => 'This is m.........']];
        return $blogs;
    }

}