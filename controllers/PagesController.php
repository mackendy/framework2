<?php

/**
 * Description of PagesController
 *
 * @author mackendy
 */
class PagesController extends app\Controller{
    
    
    public function index(){
       // $this->render('index');
    }
    
    public function view($id="1"){
       $p['page'] = $this->loadModel("post")
               ->post
               ->findFirst([
                    'conditions' => ['post_id' => $id,'post_type' => 'page','post_status'=>'online' ]
                 ]);
       
       
       if(empty($p['page'])){
           $this->e404("cette page existe pas");
       }else{
          $this->set($p);
          $this->render("view");
       }
                 
       
    } 
}

