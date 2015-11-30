<br><br>
            
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            D-LEARNING
            <small><?php echo $header; ?></small>
          </h1>
         
        </section>
        <!-- Main content -->
        <section class="content">
          <!-- Your Page Content Here -->
          
          <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Silahkan Daftar</div>
                                                
                        </div>
                      <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                           
                          <div class="panel panel-info">
                          </div>

              <form method="POST" action="<?php echo base_url().'index.php/c_soal/input_soal/';?>">
                
                 <!-- textarea -->
                    <div class="form-group">
                      
                      <textarea class="form-control" rows="3" placeholder="Masukan Pertanyaan ..." name="pertanyaan"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <input type="text" class="form-control" name="kunci_jawaban" placeholder="Kunci jawaban text" >
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="pil_a" placeholder="Kunci jawaban a" >
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="pil_b" placeholder="Kunci jawaban b" >
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="pil_c" placeholder="Kunci jawaban c" >
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="pil_d" placeholder="Kunci jawaban d" >
                    </div>

                    <div class="form-group">
                       
                        <select class="form-control" name="jawaban">
                        <option value="a">Pilihan A</option>
                        <option value="b">Pilihan B</option>
                        <option value="c">Pilihan C</option>
                        <option value="d">Pilihan D</option>
                      </select>
                      
                    </div>

                    <div class="form-group">
                       <div class="col-md-offset-5 col-md-9">
                        <button type="submit" name="input" id="btn-signup" class="btn btn-info"><i class="icon-hand-right"></i> Input</button>
                          <span style="margin-left:8px;"></span> 
                         <button type="reset" name="reset" id="btn-signup" class="btn btn-info"><i class="icon-hand-right"></i> Reset</button>
                          <span style="margin-left:8px;"></span>   
                        </div>               
                    </div>

            </form>

            
                    
        </div>
                 </div>
            </div>


          
           