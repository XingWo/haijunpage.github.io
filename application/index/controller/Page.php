<?php
namespace app\index\controller;
use think\Controller;

class Page extends Controller
{
    //实验原理
    public function syyl(){
        return $this->fetch();
    }

   //实验目的
    public function symd(){
        return $this->fetch();
    }

    //项目特色
    public function xmts(){
        return $this->fetch();
    }

    //在线答疑
    public function zxdy(){
        return $this->fetch();
    } 
    
    //成绩查询
    public function cjxq(){    

        return $this->fetch();
    }



    public function cjxqlist(){




        $list=db('mark')->page($_GET['page'])->limit($_GET['limit'])->select();  


        $count=db('mark')->count(); 
        $data['code']=0;
        $data['msg']='';
        $data['count']= $count;
       $data['data']=$list;   
        return json($data);
    }




    public function getText(){

        $add['user']="张三";
        $add['content']=$_POST['content'];
        $add['time']=date('Y-m-d H:i:s',time());

        $res=db('question')->insert($add);

        if($res){
            $data=0;
        }else{
            $data=1;
        }

        return json($data);

    }


}
