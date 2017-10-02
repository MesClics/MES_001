<?php
    class MCFlashMessage{
        private $type;
        private $content;

        public function __construct($type, $content){
            $this->setType($type);
            $this->setContent($content);

            addSessionFlashMessage($this);
        }
    
        public function type(){
            return $this->type;
        }

        public function content(){
            return $this->content;
        }

        public function setType($type){
            $this->type = $type;
        }

        public function setContent($content){
            $this->content = $content;
        }

        public function addSessionFlashMessage(MCFlashMessage $message){
            $_SESSION['flash'][] = $message;
        }

    }
?>