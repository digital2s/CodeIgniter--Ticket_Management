
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                       <?php if (isset($num_department)) : ?>
                    <h3 class="page-header">Update Department</h3>
                     <?php else : ?>
                      <h3 class="page-header">Add New Department</h3>
                       <?php endif; ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div  class="col-lg-12">
                    <fieldset  class="form-group">
                    <?php if (isset($num_department)) : ?>
                      <?= form_open('c_department/validFormUpdateDepartment'); ?>
                        <?php else : ?>
                      <?= form_open('c_department/validFormCreateDepartment'); ?>

                  <?php endif; ?>
                    
  <div class="form-group">
    <label for="formGroupExampleInput">Department</label>
       <input type="hidden" value="<?php if (isset($num_department)) : ?><?= set_value('hidden_department', $num_department) ;?>        <?php endif; ?>" name="hidden_department" >
    <input  autofocus type="text" value="<?php if (isset($num_department)) : ?><?= set_value('text_department', $label_department) ;?>       <?php endif; ?>" name="text_department" class="form-control" id="formGroupExampleInput" placeholder="">
  </div>
  

   <button type="submit" class="btn btn-info"><i  class="fa fa-save"></i> <?php if (isset($num_department)) : ?> Update  <?php else: ?> Create <?php endif; ?></button>   <button type="reset" class="btn btn-info"><i  class="fa fa-eraser"></i> Reset</button>
</form></fieldset>
                </div>
            </div>