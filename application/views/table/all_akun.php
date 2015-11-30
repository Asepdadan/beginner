 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Tables
            <small>advanced tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>
        </section>

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Akun</h3>
                </div><!-- /.box-header -->
               <h1> <p align="center" class="bg-success"><?= $this->session->flashdata('info');?></p></h1>
               

                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      
                      <tr>
                        
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No Handphone</th>
                        <th>Action</th>
                      </tr>

                    </thead>
                    <tbody>
                      <?php foreach ($data as $row) { ?>
                        
                      <tr>
                        
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['no_handphone']; ?></td>
                        <td><center><a href="<?php echo base_url().'index.php/data_akun/update/'.$row['id']; ?>"><button type="submit" name="edit" id="btn-login" class="btn btn-info">edit</button></a> 
                        <button type="submit" name="hapus" id="btn-login" class="btn btn-info" data-toggle="modal" data-target="#myModal">hapus</button>
                        </center></td>

                      <?php } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </tfoot>
                  </table>


                    <!-- Tombol Untuk menampilkan modal -->
                  <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    Buka Modal
                  </button>

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->


 
<!-- Dialog Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Data Akan Di hapus</h4>
      </div>
      <div class="modal-body">
        <?php foreach ($data as $row) { ?>
                      <table id="example1" class="table table-bordered table-striped">
                      <tr>
                        
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No Handphone</th>
                        
                      </tr>
                      <tr>
                        <td><?php echo $row['npm']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['no_handphone']; ?></td>
                      
                      <?php } ?>
                      </table>  
      </div>
      <div class="modal-footer">
      <a href="<?php echo base_url().'index.php/data_akun/delete/'.$row['id']; ?>"><button type="submit" name="hapus" id="btn-login" class="btn btn-default" data-toggle="modal" data-target="#myModal">Ya</button></a>
      
        <button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>
        
      </div>
    </div>
  
</div>
- See more at: http://fabernainggolan.net/membuat-modal-bootstrap-php#sthash.Mbo7POOn.dpuf


            
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->