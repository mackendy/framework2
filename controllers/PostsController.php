<?php

/**
 * Description of PostsController
 *
 * @author mackendy
 */
class PostsController extends app\Controller{
    
    
    public function index(){
        $posts=$this->loadModel("post")
                ->post
                ->find([
                   'conditions'=>['post_type'=>'post','post_status'=>'online'] 
                ]);
        $this->set('post',$posts);
    }
    
    public function view($id="1"){
       $p['post'] = $this->loadModel("post")
               ->post
               ->findFirst([
                    'conditions' => ['post_id' => $id,'post_type' => 'post','post_status'=>'online' ]
                 ]);
       
       
       if(empty($p['post'])){
           $this->e404("cette article existe pas");
       }else{
          $this->set($p);
          $this->render("view");
       }
                 
       
    } 
}


