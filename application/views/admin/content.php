  <?php
         $username = $this->session->userdata('username');
          

        $res = $this->db->query("select username,nama,email from daftar where username='$username' ");

        foreach ($res->result_array() as $d) {
        
        
       
 } ?>
            
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            D-LEARNING
            <small>Optional description</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">



          <!-- Your Page Content Here -->
          <br>
          <div class="row">
          <div class="col-sm-7">

                              <div class="well"> 
                                <form class="form-horizontal" role="form" action="<?php echo base_url().'index.php/dashbord/post_status/';?>" method="POST">
                                    <h4>Input Keluhan?</h4>
                                     <div class="form-group" style="padding:14px;">
                                      <textarea class="form-control" placeholder="isi keluhan anda" name="post"></textarea>
                                    </div>
                                    <button class="btn btn-primary pull-right" type="submit">Post</button><ul class="list-inline"><li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li><li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li><li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li></ul>
                                  </form>
                              </div>

                            </div>
                          <!-- content -->                      
                        
                          
                         <!-- main col left --> 
                         <div class="col-sm-7">
                           
                         <!--status -->
                              <div class="panel panel-default">
                               
                            <?php foreach ($req as $key ) { ?>
                               <div class="panel panel-default">
                               
                                <div class="panel-heading"><h4><?php echo $key['username']; ?></h4></div> 
                                
                                <div class="panel-body">
                                  
                                    <?php echo $key['status']; ?>
                                  
                                    
                                  </div>

                              </div><!--end-->
                              
                                  <?php }?>
                           </div>
                           
                         </div>
                        

            <div class="col-md-3">
              <!-- DIRECT CHAT DANGER -->
              <div class="box box-danger direct-chat direct-chat-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Direct Chat</h3>
                  <div class="box-tools pull-right">
                    <span data-toggle="tooltip" title="3 New Messages" class='badge bg-red'>3</span>
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages">
                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class='direct-chat-info clearfix'>
                        <span class='direct-chat-name pull-left'>Alexander Pierce</span>
                        <span class='direct-chat-timestamp pull-right'>23 Jan 2:00 pm</span>
                      </div><!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="message user image" /><!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        Is this template really for free? That's unbelievable!
                      </div><!-- /.direct-chat-text -->
                    </div><!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class='direct-chat-info clearfix'>
                        <span class='direct-chat-name pull-right'>Sarah Bullock</span>
                        <span class='direct-chat-timestamp pull-left'>23 Jan 2:05 pm</span>
                      </div><!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg" alt="message user image" /><!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        You better believe it!
                      </div><!-- /.direct-chat-text -->
                    </div><!-- /.direct-chat-msg -->                    
                  </div><!--/.direct-chat-messages-->

                  <!-- Contacts are loaded here -->
                  <div class="direct-chat-contacts">
                    <ul class='contacts-list'>
                      <li>
                        <a href='#'>
                          <img class='contacts-list-img' src='../dist/img/user1-128x128.jpg'/>
                          <div class='contacts-list-info'>
                            <span class='contacts-list-name'>
                              Count Dracula
                              <small class='contacts-list-date pull-right'>2/28/2015</small>
                            </span>
                            <span class='contacts-list-msg'>How have you been? I was...</span>
                          </div><!-- /.contacts-list-info -->
                        </a>
                      </li><!-- End Contact Item -->                      
                    </ul><!-- /.contatcts-list -->
                  </div><!-- /.direct-chat-pane -->
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <form action="#" method="post">
                    <div class="input-group">
                      <input type="text" name="message" placeholder="Type Message ..." class="form-control"/>
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-danger btn-flat">Send</button>
                      </span>
                    </div>
                  </form>
                </div><!-- /.box-footer-->
              </div><!--/.direct-chat -->
            </div><!-- /.col -->
          </div><!-- /.row -->


                              




       



