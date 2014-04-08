<?php

class LikeController extends BaseController {
		
	public function __construct() {
		//We will implement Filters later
		//$this -> beforeFilter('csrf', array('on' => 'post'));
		//I will not implement login system here since its already covered
		//in our secure login system series you can download the code from there
		
		
	}
	
	public function index(){
		return View::make('index');
	}
	
	public function like(){
			
		if(Input::has("post_id")){
			
			$post_id=explode("_",Input::get("post_id"));
			
			//Find if user already liked the post
			if(Likes::where("post_id",$post_id[1])->count()>0){
				Likes::where("post_id",$post_id[1])->delete();
				return Response::json(array("result"=>"1","isunlike"=>"0","text"=>"Like"));
			}else{
				$like=new Likes();
				//We are using hardcoded user id in production change 
				//it to Sentry::getId() if using Sentry for authentication
				$like->user_id="1";
				$like->post_id=$post_id[1];
				$like->save();
				
				return Response::json(array("result"=>"1","isunlike"=>"1","text"=>"unlike"));
			}
			
			return Response::json(array("result"=>"1","isunlike"=>"1","text"=>"unlike"));
		}else{
			//No post id no access sorry
			return Response::json(array("result"=>"0"));
		}
		
		
	}
	
	
}