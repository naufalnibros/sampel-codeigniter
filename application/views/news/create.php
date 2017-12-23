<?php echo validation_errors();  ?>

<?php echo form_open('news/create'); ?>

  <label>Judul</label>
  <input type="text" name="title"><br>

  <label>Text</label>
  <textarea name="text" rows="8" cols="80"></textarea><br>

  <input type="submit" name="submit" value="Kirim!">

<?php echo form_close(); ?>
