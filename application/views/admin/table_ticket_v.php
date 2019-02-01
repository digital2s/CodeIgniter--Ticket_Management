<div id="page-wrapper">
  <div class="row">
    <div  class="col-lg-12">
      <h2>Tickets Table</h2>
      <div class="table-responsive">           
        <table class="table table-hover"  id="dataTables">
          <thead>
            <tr>
            <th>#</th>
            <th>Department</th>
            <th>Incident</th>
             <th>Priority</th>
             <th>Status</th>
              <th>Date</th>
            <th></th>
          
              <th></th>
             
            </tr>
          </thead>
          <tbody>
             <?php foreach ($incidents as  $incident): ?>
            <tr>
            <td><?= $id=$incident->num_incident ;  ?></td>
            <td><?= $incident->label_department ;  ?></td>
            <td><?= $incident->title_incident ;  ?></td>
            <td><?= $incident->priority ;  ?></td>
             <td><?= $incident->statut ;  ?></td>
            <td><?= $incident->date_incident ;  ?></td>
            <td  class="eye"><a class="fancybox  fancybox.iframe" href="<?= site_url('c_incident/readDetailsById/'.$id) ;?>"  ><i  class="fa fa-eye"></i></a></td>
            <td  class="trash"><a  onClick="return confirm('I want to delete this incident .');" class="text-danger" href="<?= site_url('c_incident/deleteIncident/'.$id) ;?>"><i  class="fa fa-trash"></i></a></td>
            </tr>
          <?php  endforeach; ?>
          </tbody>
        </table>
        <div  class="col-lg-6">
         <!--float: left !important-->
<button title="Print" onClick='return window.print();' style="" type="submit" name=""  class="pull-left  btn btn-info"><i  class="fa fa-print"></i></button>
        </div>
             <div  class="col-lg-6"> 
               <a  title="Delete All" href="<?= site_url('c_incident/deleteIncident/') ;?>" onClick="return confirm('I want to delete all incidents .');"   class="pull-right  btn btn-danger"><i  class="fa fa-trash"></i></a>
          </div>  
      </div>
    </div>
  </div>
</div>
</form>

