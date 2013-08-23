<?php

/**
 * Description of IndexController
 *
 * @author mackendy
 */
class IndexController  extends app\Controller{
    //put your code here
    
    public function index(){
        $posts=$this->loadModel("post")
                ->post
                ->find([
                   'conditions'=>['post_type'=>'post','post_status'=>'online'] 
                ]);
        $this->set('post',$posts);
    }
}

?>
