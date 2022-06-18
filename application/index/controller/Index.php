<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{

    public function list(){
        

       $list=db("user")->find();

        print_r($list);



    }



    public function index(){

        $where['id']=2;

        $list=db("user")->where($where)->find();
         
        $this->assign('a',$list['username']);


        $this->assign('realname',$list['realname']);

        return $this->fetch();
    }

   
}
