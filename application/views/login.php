
<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="<?= site_url('c_user/signin');  ?>" role="login">
          <img src="http://i.imgur.com/RcmcLv4.png" class="img-responsive" alt="" />
          <input type="text" name="text_login" required placeholder="Login"  class="form-control input-lg" value="" autofocus />
          
          <input type="password"  name="password" required class="form-control input-lg" id="password" placeholder="Password"  />
          
          
          <div class="pwstrength_viewport_progress"><?= form_error('text_login'); ?></div>
          
          
          <button type="submit" name="go" class="btn btn-lg btn-success btn-block">Sign in</button>
          <div>
            <a href="<?= site_url('c_user/signup'); ?>">Create account</a> or <a href="<?= site_url('c_user/reset_pw'); ?>"">reset password</a>
          </div>
          
        </form>
        
        <div class="">
          <a href="#">    <?= '<span class="text-danger">'.$error.'</span>' ; ?></a>
        </div>
      </section>  
      </div>
      
      <div class="col-md-4"></div>
      

  </div>
  
  <p  style="text-align:center !important; font-weight: bold; margin-top :  45px !important">
    <a href=""  ><small>Ticket Management Application</small> &copy;  2018</a>
    <br>
    <br>
    
  </p>     
  
  
</div>

<style type="text/css">
    
    @CHARSET "UTF-8";
/*
over-ride "Weak" message, show font in dark grey
*/

.progress-bar {
    color: #333;
} 

/*
Reference:
http://www.bootstrapzen.com/item/135/simple-login-form-logo/
*/

* {
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
    outline: none;
}

    .form-control {
      position: relative;
      font-size: 16px;
      height: auto;
      padding: 10px;
        @include box-sizing(border-box);

        &:focus {
          z-index: 2;
        }
    }

body {
    background: url(http://www.proformascreening.com/wp-content/uploads/2014/02/employment-screening-company-about.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

.login-form {
    margin-top: 60px;
}

form[role=login] {
    color: #5d5d5d;
    background: #f2f2f2;
    padding: 26px;
    border-radius: 10px;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
}
    form[role=login] img {
        display: block;
        margin: 0 auto;
        margin-bottom: 35px;
    }
    form[role=login] input,
    form[role=login] button {
        font-size: 18px;
        margin: 16px 0;
    }
    form[role=login] > div {
        text-align: center;
    }
    
.form-links {
    text-align: center;
    margin-top: 1em;
    margin-bottom: 50px;
}
    .form-links a {
        color: #fff;
    }
</style>