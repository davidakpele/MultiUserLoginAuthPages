<?php
class PagesController extends Controller {

    private $namespacemodel;
    public function __construct() {
       @$this->namespacemodel = @$this->loadModel('LoginModel');
    }
 public function index(){
    @$data = [
                'meta_Description'=>''
                
            ];
        // Render View Controller
    @$this->view('index', @$data);    
    }
}