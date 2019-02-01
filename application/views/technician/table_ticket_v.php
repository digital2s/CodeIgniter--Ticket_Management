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
            <tr  class="row_ticket">
            <td><?= $id=$incident->num_incident ;  ?></td>
            <td><?= $incident->label_department ;  ?></td>
            <td><?= $incident->title_incident ;  ?></td>
            <td><?= $incident->priority ;  ?></td>
             <td><?= $incident->statut ;  ?></td>
            <td><?= $incident->date_incident ;  ?></td>
        
            <td  class="show"><a href="<?= site_url('c_technician/check_access/'.$id) ; ?>"><i  class="fa fa-eye"></i></a></td>
            <td  class="test">

                <?php  if ($incident->read_incident == 1) {
                  echo "<i class='fa fa-check  text-success check'></i>";

                }   ?>
            </td>
            
            </tr>
          <?php  endforeach ?>
          </tbody>

        </table>
      
        <div  class="col-lg-6">
  
      </div>
    </div>
  </div>
</div>
</form>