
<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
          <form method="post" action="<?= site_url()."/c_user/validFormSignup"; ?>" role="login">
          <img src="http://i.imgur.com/RcmcLv4.png" class="img-responsive" alt="" />

                <select  name="select_department" class="form-control" id="sel1">
        <?php foreach($departments  as $key=>$value) : ?>
                        <option value="<?= $key; ?>" >
                            <?= $value; ?>
                        </option>
                    <?php endforeach; ?>
      </select>

          <input type="text" name="text_fname" placeholder="First name" required class="form-control input-lg" value="" />
          <?= form_error('text_fname');?>
          <input type="text" name="text_lname" class="form-control input-lg"  placeholder="Last name" required="" />
          <?= form_error('text_lname');?>
            <input type="email" name="email" placeholder="Email" required class="form-control input-lg" value="" />
          <?= form_error('email');?>
          <input name="text_login" type="text" class="form-control input-lg"  placeholder="Login" required="" />
          <?= form_error('text_login');?>
            <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password" required="" />
          
          <?= form_error('password');?>
          
        <!--  <div class="pwstrength_viewport_progress"></div> -->
          
          
          <button type="submit" name="go" class="btn btn-lg btn-success btn-block">Sign up</button>
          <div>
            <a href="<?= site_url('c_user') ; ?>">Login Page</a>
          </div>
          
        </form>
        
        <div class="form-links">
          <a href="#">    <?php if(isset($error))echo '<span class="error">'.$error."</span>";?></a>
        </div>
      </section>  
      </div>
      
      <div class="col-md-4"></div>
      


  </div>
  
       <p  style="text-align:center !important; ; font-weight: bold">
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
    background: url(http://i.imgur.com/GHr12sH.jpg) no-repeat center center fixed;
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