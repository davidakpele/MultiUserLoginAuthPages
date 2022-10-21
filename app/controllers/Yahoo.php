<?php

Class Yahoo extends Controller
{
    function index(){

        $data  =
        [
            'page_title'=>'Yahoo'
        ];

        $this->view('Yahoo', $data);
    }
}