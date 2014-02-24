
<?php 

echo form_open('ckeditor/add');
echo form_textarea('content', 'sdfsdfsd', array('class'=>'test'));
echo display_ckeditor($ckeditor); 
echo "<br/>";
echo form_textarea('content_2');
echo display_ckeditor($ckeditor_2); 
echo "<br/>";
echo form_submit('submit', 'Submit');
echo form_close();
?>