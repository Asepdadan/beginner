<<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>


<?php echo $message; ?>
<div id="gallery">
<?php
$atts = array(
  'width' => '8000',
  'height' => '600',
  'scrollbars' => 'yes',
  'status' => 'yse',
  'resizeable' => 'yes',
  'screenx' => '0',
  'screeny' => '0'
  );
  
  foreach ($images as $image);
?>

<div class="thumb">
<a href="<?php echo base_url().'upload_image/'.$images; ?>">
<?php echo anchor_popup(base_url().'upload_image/'.$image
'<img src="'.base_url().'thumb/'.$image.'" alt="" />',$atts);
?>'
</a></div>
<?php endforeach;
?>

</div>

<div id="upload"> Silahkan memilih file yg akan di upload;
<?php
echo form_open_multipart('gallery');
echo form_upload('userfile');
echo form_submit('upload','upload');
echo form_close();
?>

</div>


</body>
</html>