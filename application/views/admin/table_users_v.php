<?= form_open('c_user/deleteAccount'); ?> 
<div id="page-wrapper">
  <div class="row">
    <div  class="col-lg-12">
        <?php if ($id_type==2): ?>
      <h2>Employees Table</h2>
    <?php elseif ($id_type==3): ?>
           <h2>Technician  Table</h2>
       <?php endif; ?> 
      <div class="table-responsive"> 
      
                      
        <table class="table table-hover">
          <thead>
            <tr>
            <th>#</th>
            <th>Department</th>
             <th>First name</th>
             <th>Last name</th>
                <th>Email</th>
            <th>Login</th>
          
              <th>Password</th>
              <th><input id="selectAll" title="Select All" type="checkbox" name=""  value=""></th>
            </tr>
          </thead>
          <tbody>
                <?php foreach ($users as  $user): ?>
            <tr>
            <td></td>
            <td><?= $user->label_department ; ?></td>
            <td><?= $user->fname_user ; ?></td>
            <td><?= $user->lname_user ; ?></td>
            <td><?= $user->email_user ; ?></td>
            <td><?= $login= $user->login_user ; ?></td>
            <td><?= $user->pw_user ; ?></td>
            <td><input class="checkbox" type="checkbox" name="checkbox_user[]"  value="<?= $login; ?>"></td>

            </tr>
            
          <?php endforeach; ?>
          <tr><td  colspan="8"><?php if ($id_type==3): ?>
    <a href="" data-toggle="modal" data-target="#exampleModal" data-whatever=""   class="pull-left  btn btn-info"><i  class="fa fa-plus"></i></a> 
      <?php endif; ?>  <button onClick="return confirm('I want to remove this user .');" type="submit" name=""  class="pull-right  btn btn-danger"><i  class="fa fa-trash"></i></button> </td></tr>
          </tbody>
        </table>

            
      </div>
    </div>
  </div>
</div>
</form>


  <?= form_open('c_user/createUser'); ?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Technician</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                
       <div class="form-group">
    <label for="formGroupExampleInput">Department</label>
    <input type="text" name="text_department" class="form-control"  id="formGroupExampleInput"   placeholder=""  value="Informatique"  disabled>
  </div>
      
        <div class="form-group">
    <label for="formGroupExampleInput">First name</label>
    <input type="text"  name="text_fname" class="form-control"  id="fname"   placeholder="">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Last name</label>
     <input type="text" name="text_lname" class="form-control" id="formGroupExampleInput"
 
      placeholder="">
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">E-Mail</label>
     <input type="email" name="email"  class="form-control" id="formGroupExampleInput" 
      placeholder="">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Login</label>
    <input type="text"  name="text_login" class="form-control" id="formGroupExampleInput"
    
     placeholder=""  >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Password</label>
     <input type="text"  name="text_pass" class="form-control" id="formGroupExampleInput"
 
      placeholder="">
  </div>
  


      </div>
      <div class="modal-footer">
        
   <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Create</button>   <button onClick="" type="reset" class="btn btn-info"><i class="fa fa-eraser"></i> Reset</button>
      </div>
    </div>
  </div>
</div>
</form>