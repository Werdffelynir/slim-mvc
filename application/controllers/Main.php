<?php

namespace controllers;


use app\Core;
use app\Controller;

class Main extends Controller
{

    public function init(){}


    public function index(){

        $this->view->addData('title','AppMVC for Slim');

        $this->render('content_full', [
            'title'=>'Application MVC for Slim',
            'content'=>'AppMVC it`s simple PHP wrapper for micro framework Slim. content!',
        ]);
    }

    public function documentation(){

        $this->view->addData('title','Documentation');

        $this->render('content_full', [
            'title'=>'Documentation Application MVC for Slim',
            'content'=>'Documentation. AppMVC it`s simple PHP wrapper for micro framework Slim. content!',
        ]);
    }


    # GET pages
    #  #  #  #  #  #  #  #  #  #  #  #  #  #  #  #  #  #  #  #  #

    public function structure(){

        $this->view->addData('title','Structure AppMVC');

        $this->render('content_full', [
            'title'=>'Structure AppMVC',
            'content'=>'Structure. AppMVC it`s simple PHP wrapper for micro framework Slim. content!',
        ]);
    }

    public function download(){

        $this->view->addData('title','Download AppMVC');

        $this->render('content_full', [
            'title'=>'Download',
            'content'=>'Download. AppMVC it`s simple PHP wrapper for micro framework Slim. content!',
        ]);
    }

    public function example(){

        $this->view->addData('title','Example');

        $this->render('content_full', [
            'title'=>'Example AppMVC',
            'content'=>'Example. AppMVC it`s simple PHP wrapper for micro framework Slim. content!',
        ]);
    }


    # GET & POST pages
    #  #  #  #  #  #  #  #  #  #  #  #  #  #  #  #  #  #  #  #  #

    public function login(){

        $this->view->addData('title','Login');

        $this->render('content_full', [
            'title'=>'Authorization',
            'content'=>'Authorization. AppMVC it`s simple PHP wrapper for micro framework Slim. content!',
        ]);
    }

    public function logout(){

    }

    public function contacts(){

        $this->view->addData('title','Contacts');

        $this->render('content_full', [
            'title'=>'Debugs form',
            'content'=>'Documentation. AppMVC it`s simple PHP wrapper for micro framework Slim. content!',
        ]);
    }





}
