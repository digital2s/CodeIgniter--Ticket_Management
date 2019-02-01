  <?php $id_deparmtent = $this->session->userdata('id_department') ;  ?>
          <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                    <!--    <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                        </li>-->
                    
                        <?php
                                 if( $this->session->userdata('id_type')==1) : ?>

                                    <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i>Departments<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= site_url("c_department/readDepartments"); ?>">Departments Table</a>
                                </li>
                                <li>
                                    <a href="<?= site_url("c_department/createDepartment"); ?>">Add Department</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>                         
                   
                      <?php     elseif( $this->session->userdata('id_type')==2):  ?>
                          
   <li><a><i class='fa fa-building fa-fw'></i> <?= $this->session->userdata('label_department') ; ?> Department</a> </li>
                         
                           <?php endif;  ?>
                           <?php  if( $this->session->userdata('id_type')==2) : ?>
                        <li>
                            <a href="#"><i class="fa fa-warning fa-fw"></i>  Tickets<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= site_url('c_incident/readIncidentsByDepartment/'.$id_deparmtent) ; ?>">Archives</a>
                                </li>
                               
                                <li>
                                    <a href="<?= site_url('c_incident/addIncident') ; ?>">Add Ticket</a>
                                </li>

                         
                            </ul>
                           
                        </li>   

                                        <?php  elseif( $this->session->userdata('id_type')==1) : ?>
                        <li>
                            <a href="#"><i class="fa fa-warning fa-fw"></i>Tickets <span class="fa arrow"></span></a>

                             <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= site_url('c_incident/readIncidents/') ; ?>">All Tickets (with answer)</a>
                                </li>
        </ul>
                           
                        </li>

                             <?php  elseif( $this->session->userdata('id_type')==3) : ?>
                        <li>
                            <a href="#"><i class="fa fa-warning fa-fw"></i>Tickets <span class="fa arrow"></span></a>

                                                         <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= site_url('c_technician') ; ?>">Recipients</a>
                                </li>
        </ul>
        
                           
                        </li>


                           <?php endif; ?>
                            <?php  if( $this->session->userdata('id_type')==1) : ?>
  <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Users <span class="fa arrow"></span></a>
                           <ul class="nav nav-second-level">
                    
                         <li>
                            <?php $id_type = 2  ?>
                            <a href="<?= site_url('c_user/readUsersByType/'.$id_type); ?>">Employees</a>                       
                        </li>

                        <li>
                            <?php $id_type = 3  ?>
                            <a href="<?= site_url('c_user/readUsersByType/'.$id_type); ?>">Technician</a>
                        </li>
</ul>
</li>
                        <?php endif; ?>
                        <li>
                            <a href="#"><i class="fa fa-lock fa-fw"></i> My Account<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= site_url('c_user/updateAccount') ; ?>">Edit My Account</a>
                                </li>
                            </ul>
                          
                        </li>
                    </ul>
                </div>
             
            </div>
         
        </nav>
