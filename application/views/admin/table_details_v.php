<div   class="row">
<div id="page-wrapper"  style="margin:0">
         <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Ticket Details &nbsp; #<?= $incident->num_incident ;  ?></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
  <div class="row">
<div  class="col-lg-12">

                 <div class="timeline-panel">
                   <?php // foreach ($incidents as  $incident): ?>
                                        <div class="timeline-heading">
                       
                               <h4 class="timeline-title"><?= $incident->title_incident ;  ?> </h4>
                                            <p><small class="text-muted"><i class="fa fa-user"></i> By <b> <?=  $incident->fname_user ;  ?></b></small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
                                            <p><?=  $incident->desc_incident;  ?></p>
                                        </div>
                                          <?php //  endforeach; ?>
                                    </div>
                                  </div>
                                </div>

<br />
                                  <div class="row">
<div  class="col-lg-12">
<h5>Answer</h5>
                 <div class="timeline-panel">
                   <?php // foreach ($incidents as  $incident): ?>
                                        <div class="timeline-heading">
                            <h4 class="timeline-title"><?php // $title_incident ;  ?></h4>
                                            <p><small class="text-muted"><i class="fa fa-user"></i> By <b> <?= $this->session->userdata('fname_user') ;  ?></b></small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
            
                                            <p><?= $incident->text_response;  ?></p>
                                        </div>
                                          <?php //  endforeach; ?>
                                    </div>
                                  </div>
                                </div>
                           
                   </div>

</div>














<style type="text/css">
 .timeline-panel {
    float: left;
    position: relative;
    width: 100%;
    padding: 20px;
    border: 1px solid #d4d4d4;
    border-radius: 2px;
    -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
    box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
}
</style>