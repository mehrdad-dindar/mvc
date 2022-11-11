<?php

class Post
{
    public function index()
    {
        echo "i am index methode of post";
    }
    public function edit()
    {
        echo "i am edit methode of post";
    }

    public function calc($param1,$param2,$param3)
    {
        echo $param1+$param2+$param3;
    }
}