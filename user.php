<?php
    class User {
        private static $count = 0;
        private $id;
        private $name;
        private $mail;
        private $pass;
        private $icon;

        public function __construct($name, $mail, $pass, $icon) {
            $this->id = ++self::$count;
            $this->name = $name;
            $this->mail = $mail;
            $this->pass = $pass;
            $this->icon = $icon;
        }

        public function getId() {
            return $this->id;
        }
        public function getName() {
            return $this->name;
        }
        public function getMail() {
            return $this->mail;
        }
        public function getPass() {
            return $this->pass;
        }
    }
?>