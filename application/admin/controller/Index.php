<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/4/11
 * Time: 19:42
 */

namespace app\admin\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        dump(111);die;
        return $this->fetch();
        //dump(111);die;
        //return view('index');

    }
}