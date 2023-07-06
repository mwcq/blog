<?php
namespace Home\Controller;
use Think\Controller;
class QiantaiController extends Controller {
    function blog(){
    	$user=D("user");
    	$blog=D("producesynopsis");
    	$count = $blog->count();
		$Page = new \Think\Page($count,10);
		$Page ->rollPage=5;
		$Page ->lastSuffix=false;
		$Page -> setConfig('prev','上一页');
		$Page -> setConfig('next','下一页');
		$Page -> setConfig('last','末页');
		$Page -> setConfig('first','首页');
		$pagelist= assert("pagelist",$pagelist);
		$show=$Page->show();
		$info=$blog->limit($Page->firstRow,$Page->listRows)->select();
		$this -> assign("pagelist",$show);
		$this -> assign('name',$name);
		$this -> assign("info",$info);
    	$this -> display();
	}
	function blog_type(){
		$user=D("user");
		$blog=D("producesynopsis");
		$id=I('get.relationship');
		
		 $count = $blog->count();
		 $Page = new \Think\Page($count,10);
		 $Page ->rollPage=5;
		 $Page ->lastSuffix=false;
		 $Page -> setConfig('prev','上一页');
		 $Page -> setConfig('next','下一页');
		 $Page -> setConfig('last','末页');
		 $Page -> setConfig('first','首页');
		 $pagelist= assert("pagelist",$pagelist);
		 $show=$Page->show();
		 $info=$blog->limit($Page->firstRow,$Page->listRows)->where('relationship ='.$id)-> select();
		$this -> assign("pagelist",$show);
		$this -> assign('name',$name); 
		//$info=$blog->where('relationship ='.$id)-> select();
		//dump($info);
		$this->assign("info",$info);
		$this->display();
	}
	function blog_xq(){
		$id=I("get.produceid");
		$blog=D("producesynopsis");
		$blog -> execute("update producesynopsis set browse = browse+1 where produceid = ".$id);
		$info=$blog -> find($id);
		$this -> assign("info",$info);
		$this -> display();
	}
	function dm(){$this -> display();}
	function dmxq(){$this -> display();}
	function index(){$this -> display();}
	function qianduan(){$this -> display();}
	function youxi(){$this -> display();}
	function youxixiazai(){$this -> display();}
	
}