<div style="margin-left:80px">
<h3>Upload Gallery Images </h3>
<br/>
<?php
echo form_open_multipart('gallery/add');
echo form_upload('resume[]');
echo "<br/>";
echo form_upload('resume[]');
echo "<br/>";
echo "<br/>";
echo form_submit('submit', 'Upload Resume');

?>
</div>