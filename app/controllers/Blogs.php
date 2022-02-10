<?php


class Blogs extends Controller{
    

    public function index(){
        echo 'Index';
    }

    public function displayBlogs(){
        $blog = $this->getModelInstance('Blog');
        $b = $blog->getBlogs();
        $this->view('blogs',$b);
    }
}