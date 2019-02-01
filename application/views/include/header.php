        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Ticket Management </a>

            </div>
   

            <ul class="nav navbar-top-links navbar-right">

                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Hello <b><?= $this->session->userdata('fname_user') ; ?> :)</b>
                    </a>
                   
                 
                </li>
           
                <li  class="dropdown">   
                    <a title="Sign out" class="dropdown-toggle"  href="<?= site_url('c_user/signout');  ?>"><!--data-toggle="dropdown"-->
                        <i  class="fa fa-power-off fa-fw"></i> 
                    </a>
                   
             
                </li>
             
            </ul>
         

  