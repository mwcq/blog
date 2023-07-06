<?php
namespace Home\Controller;
use Think\Controller;
class HoutaiController extends Controller {
	function index() {
		/*$user = new \Home\Model\userModel();
		 dump($user);*/
		/*$user=D('user');
		 dump($user);*/
		$this -> display();
	}

	function main() {$this -> display();
	}
	
	function article_edit(){
		$blog=D("producesynopsis");
		$type = D('sonpartition');
		$id=I("get.produceid");
		if(IS_POST){
			$shuju=I("post.");
			$shuju['updateTime']=date('Y-m-d h:i:s', time());
			//dump($shuju);
			$shuju2=$blog -> save($shuju);
			if ($shuju2) {
				$this -> success("修改成功", U('article_index'), 2);
			} else {
				$this -> error("修改失败", U('article_create'), 2);
			}
		}else{
			$info=$blog -> find($id);
			$this -> assign('info',$info);
			$this -> display();
		}
	}
	
	function article_del(){
		$blog=D("producesynopsis");
		$id=I("get.produceid");
		$shuju=$blog -> delete($id);
			if ($shuju) {
				$this -> success("刪除成功", U('article_index'), 2);
			} else {
				$this -> error("刪除失敗", U('article_index'), 2);
			}
	}
	
	function article_create() {
		$blog=D("producesynopsis");
		$type = D('sonpartition');
		if(IS_POST){
			$shuju=I("post.");
			$shuju['produceDate']=date('Y-m-d h:i:s', time());
			$shuju['updateTime']=date('Y-m-d h:i:s', time());
			$shuju['produceIntroduce']=html_entity_decode($shuju['produceIntroduce']);
			$type1=$shuju['sKind'];
			
			switch($type1){
				case 'PC资源分享':
				$shuju['relationship']=1;
				break;
				case 'PC游戏资源':
				$shuju['relationship']=1;
				break;
				case 'Android软件资源':
				$shuju['relationship']=1;
				break;
				case '其他软件资源':
				$shuju['relationship']=1;
				break;
				case '动漫资源':
				$shuju['relationship']=2;
				break;
				case '电视剧资源':
				$shuju['relationship']=2;
				break;
				case '电影资源':
				$shuju['relationship']=2;
				break;
				case '学习交流':
				$shuju['relationship']=3;
				break;
				case '日常闲聊':
				$shuju['relationship']=3;
				break;
				case '前端技术':
				$shuju['relationship']=3;
				break;
				case '后端技术':
				$shuju['relationship']=3;
				break;
				case 'test1':
				$shuju['relationship']=4;
				break;
				default:
			}
			
			$shuju2=$blog -> add($shuju);
			if ($shuju2) {
				$this -> success("添加成功", U('article_index'), 2);
			} else {
				$this -> error("添加失敗", U('article_create'), 2);
			}
		}
		$show_type=$type -> select();
		$this -> assign('show_type',$show_type);
		$this -> display();
	}

	function article_index() {
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
		
		$con=$blog->count();
		$this -> assign("pagelist",$show);
		$this -> assign('con',$con);
		$this -> assign('info',$info);
		$this -> display();
	}

	function db_backup() {$this -> display();
	}

	function db_reduction() {$this -> display();
	}

	function flink_create() {$this -> display();
	}

	function flink_index() {$this -> display();
	}

	function login() {$this -> display();
	}

	function nav_create() {$this -> display();
	}

	function nav_index() {$this -> display();
	}
	function type_del(){
		$type = D('sonpartition');
		$id=I('get.partitionid');
		$shuju=$type -> delete($id);
			if ($shuju) {
				$this -> success("刪除成功", U('type_index'), 2);
			} else {
				$this -> error("刪除失敗", U('type_create'), 2);
			}
	}
	function type_edit() {
		$type = D('sonpartition');
		$id=I('get.partitionid');
		if(IS_POST){
			$shuju=I('post.');
			$shuju2=$type -> save($shuju);
			if ($shuju2) {
				$this -> success("修改成功", U('type_index'), 2);
			} else {
				$this -> error("修改失败", U('type_create'), 2);
			}
		}else{
			$info=$type -> find($id);
			$this -> assign('info',$info);
			$this -> display();
		}
	}
	function type_create() {
		$type = D('sonpartition');
		if (IS_POST) {
			$shuju = I('post.');
			$shuju2 = $type -> add($shuju);
			if ($shuju2) {
				$this -> success("添加成功", U('type_index'), 2);
			} else {
				$this -> error("添加失败", U('type_create'), 2);
			}

		} else {
			$this -> display();
		}
	}

	function type_index() {
		$type = D('sonpartition');
		$info = $type -> select();
		$cot = $type -> count();
		$this -> assign('info', $info);
		$this -> assign('cot', $cot);
		$this -> display();
	}

	function user_create() {
		$user = D('user');
		if (IS_POST) {
			$shuju = I('post.');
			//dump($_POST);
			$shuju2 = $user -> add($shuju);
			if ($shuju2) {
				$this -> success("添加成功", U('user_index'), 2);
			} else {
				$this -> error("添加失败", U('user_create'), 2);
			}
		} else {
			$this -> display();
		}
	}

	function user_index() {

		$user = D('user');
		$info = $user -> select();
		$cont = $user -> count();
		//dump($cont);
		$this -> assign("info", $info);
		$this -> assign('cont', $cont);
		$this -> display();
	}

	function web_index() {$this -> display();
	}

	function web_pwd() {$this -> display();
	}

	function user_del() {
		$user = D('user');
		$user_id = I('get.userid');
		$shuju = $user -> delete($user_id);
		if ($shuju) {
			$this -> success("删除成功", U('user_index'), 2);
		} else {
			$this -> success("删除失败", U('user_index'), 2);
		}
	}

	function user_edit() {
		$user = D('user');
		$user_id = I('get.userid');
		if (IS_POST) {
			$shuju = I('post.');
			//dump($shuju);
			$shuju2 = $user -> save($shuju);
			if ($shuju2) {
				$this -> success("修改成功", U('user_index'), 2);
			} else {
				$this -> error("修改失败", U('user_index'), 2);
			}
		} else {

			$info = $user -> find($user_id);
			$this -> assign('info', $info);
			$this -> display();
		}

	}

}
