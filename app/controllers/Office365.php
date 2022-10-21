<?php

Class Office365 extends Controller
{
    function index(){

        $data  =
        [
            'page_title'=>'Office365'
        ];

        $this->view('Office365', $data);
    }
}