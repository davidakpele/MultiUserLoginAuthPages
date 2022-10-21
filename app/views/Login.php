<?php $this->view('componets/LoginHeader');?>
<body>
    <div class="header-toggle container">
            <h2 class="text-center header-element">
            <span class="bluex">G</span>
            <span class="red">o</span>
            <span class="yellow">o</span>
            <span class="bluex">g</span>
            <span class="green">l</span>
            <span class="red">e</span>
            </h2>
            <p class="text-center p1">One account. All of Google</p>
            <p class="text-center p2">Sign in to continue to Drive</p>
        </div>
        <div class="mini-container login-widget"> 
             <i class="icon fa fa-fw text-center" role="" aria-label=""></i>
            <form method="POST" class="form-group" id="__LoginMercyCollegeStudent" autocomplete="off">
                <div class="element">
                    <input name="____email" class="form-control" type="email" value="<?=((isset($_POST['____email']))?$_POST['____email']: '');?>" placeholder="Email"/>
                     <span class="___invalidERROR"><?=((isset($data['emailError']))?$data['emailError']: '');?></span>
                </div>
                <div class="element">
                    <input name="____password" class="form-control" type="password" value="<?=((isset($_POST['____password']))?$_POST['____password']: '');?>" placeholder="Password"/>
                    <span class="___invalidERROR"><?=((isset($data['passwordError']))?$data['passwordError']: '');?></span>
                </div>
                <div class="element">
                    <input type="submit" value="Login"  class="btn btn-sm btn-primary">
                </div>
                <div class="element pull-right">
                    <strong>Note:</strong> Your default
                </div><br/><br/>
            </form>
        </div>
        <div class="text-center signup-link" style="margin:20px; font-weight:bold;">
            <a href="<?=ROOT?>Signup" class="ulink">Create account</a>
        </div>
        <div class="text-center signup-link">
            <p>One Google account for everything Goole</p>
            
            <i class="icon fa fa-fw text-center" role="" aria-label=""></i>
            <i class="icon fa fa-fw text-center" role="" aria-label=""></i>
            <i class="icon fa fa-fw text-center" role="" aria-label=""></i>
            <i class="icon fa fa-fw text-center" role="" aria-label=""></i>
            <i class="icon fa fa-fw text-center" role="" aria-label=""></i>
        </div>
</body>
</html>