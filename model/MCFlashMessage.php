<?php
    class MCFlashMessage{
        private $type;
        private $content;
        private $sessionVarName;

        public function __construct($type, $content, $session_var_name = 'temp'){
            $this->setType($type);
            $this->setContent($content);
            $this->setSessionVarName($session_var_name);

            $this->addSessionFlashMessage($this->type, $this->content, $this->sessionVarName);
        }
    
        public function type(){
            return $this->type;
        }

        public function content(){
            return $this->content;
        }

        public function sessionVarName(){
            return $this->sessionVarName;
        }

        public function setType($type){
            $this->type = $type;
        }

        public function setContent($content){
            $this->content = $content;
        }

        public function setSessionVarName($name){
            $this->sessionVarName = $name;
        }

        public function addSessionFlashMessage($type, $content, $session_var_name){
            $_SESSION['flash'][$session_var_name]['type'] = $type;
            $_SESSION['flash'][$session_var_name]['message'] = $content;
        }
    }
?>