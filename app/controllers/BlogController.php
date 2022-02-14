<?php


class BlogController extends Controller{
    

    public function index(){
        echo 'Index';
    }

    public function displayBlogs(){
        $blog = $this->getModelInstance('Blog');
        $posts = $blog->getBlogs();
        $this->view('blogs',$posts);
    }
}