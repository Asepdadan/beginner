<div class="content-wrapper">
<!-- Main content -->
        <section class="content">

        <br><br>        


		<div class="panel panel-info">
  			<div class="panel-heading">E - LEARNING</div>
  				<div class="panel-body">





 					<p> 
 						Selamat Datang Di Website E - learning, dengan web ini kita banyak belajar penuh.
 					</p>
 					<p>
 						Atas Berkat Rahmat Allah SWT dan D'oa dari orang tua,sahabat, kerabat dan teman semua dengan keinginan tujuan pencapaian
 					</p>

            <?php 
            error_reporting(0);
            

            ?>   
 		
            


            <form id="form1" name="form1" method="post" action="">     
                      
                 <ol start="1" type="1">
                 <?php $no = 0; foreach ($data as $key ) { ?>
                   <?php $no++; ?> <!--untuk memberikan name di radio button -->
                <?php echo $no." "."<b>".$key['pertanyaan']."</b>"; ?>
                <br>
            
                 
                 <ol start="1" type="a">
                    <i>
                      <li><input type="radio" name="jawaban<?php echo $key['id']; ?>" value="<?php echo $key['pil_a']; ?>"><?php echo "  ".$key['pil_a']; ?></li>
                      <li><input type="radio" name="jawaban<?php echo $key['id']; ?>" value="<?php echo $key['pil_b']; ?>"><?php echo "  ".$key['pil_b']; ?></li>
                      <li><input type="radio" name="jawaban<?php echo $key['id']; ?>" value="<?php echo $key['pil_c']; ?>"><?php echo "  ".$key['pil_c']; ?></li>
                      <li><input type="radio" name="jawaban<?php echo $key['id']; ?>" value="<?php echo $key['pil_d']; ?>"><?php echo "  ".$key['pil_d']; ?></li>   
                    </i> 
                       
                  </ol>
                  <?php } ?>
                  </ol>
        

                <center><button class="btn btn-primary pull-right" type="submit" name="jawab">Jawab</button></center>
              </form>

            <?php
            if(isset($_POST['jawab']))
            {
              //print_r($data);

              print_r($_POST);

            }else
            {

              echo "belum pilih";
            }


            ?>


  			</div>
		</div>
    



        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->