 <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    


                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Silahkan Daftar</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="<?php echo base_url().'index.php/c_login/';?>" onclick="$('#signupbox').hide(); $('#loginbox').show()">silahkan Login</a></div>
                        </div>  
                      <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                           
                          <div class="panel panel-info">
                         
                               <div class="panel-title"> <?php echo validation_errors(); ?></div>
                                <p align="center" class="bg-success"><?= $this->session->flashdata('info');?></p>
                          </div>

                            <form id="signupform" class="form-horizontal" role="form" method="POST" action="<?php echo base_url().'index.php/c_register/';?>">
                                                          
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Username</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="username" placeholder="Username anda" >
                                    </div>
                                </div>

                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email dengan Format email yang benar">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Nama Depan</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="nama1" placeholder="Nama Depan 3-20 karakter">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Nama Belakang</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="nama2" placeholder="Nama Belakang 3-20 karakter">
                                    </div>
                                </div>

                                <!--Radio Button -->
                                <div class="form-group">
                                <label for="lastname" class="col-md-3 control-label">Jenis Kelamin</label>
                                <div class="col-md-9">
                                    <div class="radio"> 
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="laki-laki"  >Laki - Laki
                                        </label>
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="perempuan" checked>Perempuan
                                        </label>                                           
                                    </div>
                                  </div>
                                </div>
                                <!--end Radio -->

                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Isi Password dengan Unik">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Konfirmasi </label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="confpassword" placeholder="Isi Password dengan Unik">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">No Handphone</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="nohp" placeholder="Isi No Handphone ">
                                    </div>
                                </div>

                                <div class="form-group">
                                   <label for="file" class="col-md-3 control-label">Foto</label>
                                  <div class="col-md-9">
                                  <input type="file" id="exampleInputFile" name="foto">
                                  </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-5 col-md-12">
                                        <button type="submit" name="submit" id="btn-signup" class="btn btn-info"><i class="icon-hand-right"></i> Daftar</button>
                                        <span style="margin-left:8px;"></span> 
                                         <button type="reset" name="reset" id="btn-signup" class="btn btn-info"><i class="icon-hand-right"></i> Reset</button>
                                        <span style="margin-left:8px;"></span>   
                                    </div>
                                    
                                </div>
                                
                                
                                
                                
                            </form>
                         </div>
                    </div>

               
               </div>

                
         </div> 
    </div>
    