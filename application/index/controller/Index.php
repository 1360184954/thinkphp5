<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {

        return $this->fetch();
       //dump(111);die;
        //return view('index');

    }
}
