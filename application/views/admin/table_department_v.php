<?= form_open('c_department/deleteDepartment'); ?> 
<div id="page-wrapper">
  <div class="row">
    <div  class="col-lg-12">
      <h2>Departments Table</h2>
      <div class="table-responsive">           
        <table class="table table-hover">
          <thead>
            <tr>
            <th>#</th>
            <th>Department</th>
             <th ><a title="Edit" ><i  class="fa fa-pencil  text-warning"></i></a></th>
             <th><input  id="selectAll" title="Select All" type="checkbox" name="checkbox_department"  value=""></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($departments as  $department): ?>
              <tr>
                <td><?= $id_dep = $department->num_department ;  ?></td>
                <td><?= $department->label_department ;  ?></td>
                <td><a href="<?= site_url('C_Department/updateDepartment/'.$id_dep) ; ?>"><i  class="fa fa-pencil  text-warning"></i></a></td>
                <td><input  class="checkbox" type="checkbox" name="checkbox_department[]"  value="<?= $id_dep ; ?>"></td>
              </tr>
            <?php endforeach; ?>
            <tr><td  colspan="4"><button  onClick="return confirm('I want to delete this department .');" type="submit" name=""  class="pull-right  btn btn-danger"><i  class="fa fa-trash"></i> </button></td></tr>
          </tbody>
        </table>

             
      </div>

    </div>

  </div>

</div>
</form>