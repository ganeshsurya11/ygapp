<?php   echo form_open('users/create');  ?>
<table width="450" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th width="192" scope="row">First Name </th>
    <td width="346">
		<?php echo $form->hidden('id'); ?>
		<?php echo $form->input('firstname'); ?>
	</td>
  </tr>
  <tr>
    <th width="192" scope="row">Username</th>
    <td width="346">
		<?php echo $form->input('username'); ?>
	</td>
  </tr>
	<?php if(!$this->uri->segment(3)) { ?>
  <tr>
    <th width="192" scope="row">Password</th>
    <td width="346">
		<?php echo $form->input('password'); ?>
	</td>
  </tr>
	<?php } ?>
  <tr>
    <th scope="row">Phone</th>
    <td><?php echo $form->input('phone', set_value('phone')); ?></td>
  </tr>
  <tr>
    <th scope="row">Gender</th>
    <td>
			<label>
				<?php echo $form->radio('gender', 'male'); ?>
				Male 
			</label><br/>
			<label>
				<?php echo $form->radio('gender', 'female'); ?>
				Female
			</label>
			</td>
  </tr>
  <tr>
    <th scope="row">City</th>
    <td>
			<label>
				<?php echo $form->checkbox('city[]', 'Mumbai'); ?> 
				Mumbai
			</label><br/>
			<label>
				<?php echo $form->checkbox('city[]', 'Nasik'); ?> 
				Nasik
			</label>
		</td>
  </tr>
  <tr>
    <th scope="row">Country</th>
    <td><?php 
				$option = array(''=>'Select', 'usa' => 'USA', 'india' => 'India', 'china' => 'China');
				echo $form->select('country', $option); 
			?></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td><?php echo form_submit('submit', "Register"); ?></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
  </tr>
</table>
<?php 	echo form_close();  ?>
  