
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Edit My Account</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div  class="col-lg-12">
                    <fieldset  class="form-group">
                       <!-- <legend>Add New Incident</legend>-->
                     <?= form_open('c_user/validFormUpdateAccount'); ?>

      
        <div class="form-group">
    <label for="formGroupExampleInput">First name</label>
    <input type="text" name="text_fname" class="form-control"  id="formGroupExampleInput"  value="<?= set_value("text_fname", $this->session->userdata('fname_user'))  ?>" placeholder="">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Last name</label>
     <input type="text" name="text_lname" class="form-control" id="formGroupExampleInput"
     value="<?= set_value("text_lname", $this->session->userdata('lname_user'))  ?>" 
      placeholder="">
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">E-Mail</label>
     <input type="email" name="email"  class="form-control" id="formGroupExampleInput" value="<?= set_value("email", $this->session->userdata('email_user'))  ?>" 
      placeholder="">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Login</label>
    <input type="text"  name="text_login" class="form-control" id="formGroupExampleInput"
    value="<?= set_value("text_login", $this->session->userdata('login_user'))  ?>" 
     placeholder=""  disabled>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Password</label>
     <input type="text"  name="text_pass" class="form-control" id="formGroupExampleInput"
     value="<?= set_value("text_pass", $this->session->userdata('pw_user'))  ?>" 
      placeholder="">
  </div>
  

   <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Update</button>   <button onClick="" type="reset" class="btn btn-info"><i class="fa fa-eraser"></i> Reset</button>
</form></fieldset>
                </div>
            </div>