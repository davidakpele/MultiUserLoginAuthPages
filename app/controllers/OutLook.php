<?php

Class OutLook extends Controller
{
    function index(){

        $data  =
        [
            'page_title'=>'Sign in to you Microsoft account'
        ];

        $this->view('OutLook', $data);
    }
}