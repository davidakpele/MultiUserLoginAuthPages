<?php

Class Aol extends Controller
{
    function index(){

        $data  =
        [
            'page_title'=>'AOL'
        ];

        $this->view('Aol', $data);
    }
}