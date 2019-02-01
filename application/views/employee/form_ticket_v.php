
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Add New Incident</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div  class="col-lg-12">
                   
                  <?php echo form_open('c_incident/addIncident'); ?>
  <div class="form-group">
    <label for="formGroupExampleInput">Incident</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="text_incident" placeholder="Wifi Imprimante Reception">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Description</label>
    <textarea  name="texta_description" class="form-control" id="formGroupExampleInput2" placeholder="Hi, We have an empty toner    Problem WIFI"></textarea>
  </div>
      <div class="form-group">
      <label for="sel1">Priority</label>
      <select name="select_priority" class="form-control" id="sel1">
        <option>urgent</option>
        <option>high</option>
        <option>law</option>
        <option>pass mark</option>
      </select>
  </div>
       <div class="form-group">
      <label for="sel1">Status</label>
      <select name="select_status" class="form-control" id="sel1">
        <option>in progress</option>
        <option>new</option>
        <option>resolved</option>
      </select>
  </div>
    <div class="form-group">
    <label for="formGroupExampleInput">Date Incident</label>
    <input type="date" name="date_incident" class="form-control" id="formGroupExampleInput" >
  </div>

   <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Submit</button>   <button type="reset" class="btn btn-info"><i class="fa fa-eraser"></i> Reset</button>
</form>
                </div>
            </div>