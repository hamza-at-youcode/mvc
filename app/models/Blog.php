<?php


class Blog{

    public function getBlogs(){
        // select...
        //...
        $blogs = [['title'=>'My first blog','text' => 'This is mu fucking blog.........'],['title' => 'This is my second','text' => 'Hello every one......']];
        return $blogs;
    }
    
    public function getBlogById($id){
        // select...
        //...
        $blogs = [['title'=>'My first blog','text' => 'This is mu fucking blog.........']];
        return $blogs;
    }

}