<?php

/**
 * Description of Dispatcher
 * objet qui permet de rediriger vers le bon composant a partir du request
 * @author mackendy
 */


namespace app
{
  

    class Dispatcher {

        /**
         *contient l'url passé par l'utilisateur
         * @var string
         */
        protected $oRequest;

        public function __construct() {
            // lance mon chargeur de class autoload 
            spl_autoload_register([__CLASS__,'autoload']);
            //
            $this->oRequest = new Request();
            Router::parse($this->oRequest->sUrl,$this->oRequest);
            $controller = $this->loadController();
            if(!in_array($this->oRequest->Action, array_diff(get_class_methods($controller),  get_class_methods(get_parent_class($controller))))){
                $this->error(' Le controller '. $this->oRequest->Controller.' n\'a pas de méthode '. $this->oRequest->Action);
            }
            call_user_func_array([$controller,$this->oRequest->Action], $this->oRequest->Params);
            $controller->render($this->oRequest->Action);
            

        }
        /**
         * Permet de charger les classes de mon MVC
         * @param type $sClassName
         */
        public function autoload($sClassName){
            $sClass =  str_replace("\\",DS, $sClassName);
            require($sClass.".php");
            require_once  WEBROOT.DS.'configs/config.php';
            //var_dump($sClass);
        }

        /**
         * Permet de chargé le bon controller
         * @return Objet
         */
        public function loadController(){
            $sName =  ucfirst($this->oRequest->Controller)."Controller";
            $sFile = WEBROOT.DS."controllers".DS.$sName.".php";
            require $sFile;
            return $sController = new $sName($this->oRequest);
        }
        
        public function error($message){
            $controller = new \app\Controller($this->oRequest);
            $controller->e404($message);
            
        }
    }
}

