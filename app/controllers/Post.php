<?php

class Post extends Controller
{
    public function index()
    {
        $this->view("post/index");
    }
    public function edit()
    {
        $this->model('posts');
    }

    public function calc($param1,$param2,$param3)
    {
        echo $param1+$param2+$param3;
    }
}