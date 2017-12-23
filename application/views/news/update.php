<?php echo validation_errors();  ?>

<?php echo form_open('news/update/'.$news_item['id']); ?>

  <label>Judul</label>
  <input type="text" name="title" value="<?= $news_item['title']?>"><br>

  <label>Text</label>
  <textarea name="text" rows="8" cols="80"><?= $news_item['text']?></textarea><br>

  <input type="submit" name="submit" value="Kirim!">

<?php echo form_close(); ?>
