<h2>Login </h2>
<?php   echo form_open('auth/login');  ?>
<table width="450" border="0" cellspacing="0" cellpadding="0" class="border">
  <tr>
    <th width="192" scope="row">Username</th>
    <td width="346">
		<?php echo $form->input('username'); ?>
	</td>
  </tr>
  
  <tr>
    <th width="192" scope="row">Password</th>
    <td width="346">
		<?php echo $form->input('password'); ?>
	</td>
  </tr>
 
  <tr>
    <th scope="row">&nbsp;</th>
    <td><?php echo form_submit('submit', "Login"); ?></td>
  </tr>
</table>
<?php 	echo form_close();  ?>
  