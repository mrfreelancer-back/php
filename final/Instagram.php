<?php

    namespace Hasokeyk\Instagram;

    class Instagram{
        public InstagramLogin       $login;
        public InstagramRegister    $register;
        public InstagramUser        $user;
        public InstagramMedias      $medias;
        public InstagramUpload      $upload;

        public function __construct($username = null, $password = null){
            $this->login      = new InstagramLogin($username, $password, $this);
            $this->register   = new InstagramRegister($username, $password, $this);
            $this->user       = new InstagramUser($username, $password, $this);
            $this->upload     = new InstagramUpload($username, $password, $this);
            $this->medias     = new InstagramMedias($username, $password, $this);
        }
    }
