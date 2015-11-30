    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Silahkan Masuk</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Lupa Password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                           
                       <?php echo validation_errors(); ?> 
                        <p align="center"><?= $this->session->flashdata('error');?></p>
                        <form id="loginform" class="form-horizontal" role="form" method="POST" action="<?php echo base_url().'index.php/c_login/';?>">
                        
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <button type="submit" name="submit" id="btn-login" class="btn btn-success" data-toggle="tooltip" data-placement="right" title="klik button ini">Login</button>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Tidak Mempunyai Akun?
                                        <a href="<?php echo base_url().'index.php/c_register/'; ?>" onClick="$('#loginbox').hide(); $('#signupbox').show()" data-toggle="tooltip" data-placement="right" title="klik TULISAN biru ini mendaftar">
                                            Mari Daftar
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>