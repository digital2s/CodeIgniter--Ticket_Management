<div id="page-wrapper">
  <div class="row">
    <div  class="col-lg-12">
      <h3>Tickets - <?= $this->session->userdata('label_department'); ?> Department</h3>
        
      <div class="table-responsive">           
        <table class="table table-hover"  id="dataTables">
          <thead>
            <tr>
            <th>#</th>
            <th>Incident</th>
             <th>Priority</th>
             <th>Status</th>
              <th>Date</th>
            <th></th>
          
   
             
            </tr>
          </thead>
          <tbody>
             <?php foreach ($incidents as  $incident): ?>
            <tr>
            <td><?=$id= $incident->num_incident ;  ?></td>
            <td><?= $incident->title_incident ;  ?></td>
            <td><?= $incident->priority ;  ?></td>
             <td><?= $incident->statut ;  ?></td>
            <td><?= $incident->date_incident ;  ?></td>
            <td>
              <a  class="fancybox  fancybox.iframe" href="<?= site_url('c_incident/readDescription/'.$id) ?>" >Description</a>



            </td>
            </tr>
          <?php  endforeach; ?>
          </tbody>
        </table>

           
      </div>
    </div>
  </div>
</div>


