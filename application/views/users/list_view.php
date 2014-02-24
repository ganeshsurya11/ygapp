<br/>
<p>
	<?php echo anchor('users/create', 'Create New Account'); ?>  |  
	<?php echo anchor('users/deleteall', 'Delete All', array('onclick' => "return  confirm('Are you sure')")); ?>	|
	<?php echo anchor('users/generatePdf', 'Generate PDF'); ?>	|
	<?php echo anchor('users/generateCsv', 'Export CSV'); ?>	|
	<?php echo anchor('users/importCsv', 'Import CSV'); ?>	
</p>
<br/>
<?php form_open('users/delete'); ?>
<table border='1' width="100%" >
  <thead>
    <tr>
      <th>Index</th>
      <th> First Name </th>
      <th> Phone </th>
      <th> Gender </th>
      <th> City </th>
      <th> Country </th>
      <th> Created </th>
      <th> Action </th>
    </tr>
  </thead>
  <tbody>
   <?php $i=1; foreach($users as $user): ?>
    <tr>
      <td><?php echo $i++; ?></td>
      <td><?php echo $user->firstname ?></td>
      <td><?php echo $user->phone ?></td>
      <td><?php echo $user->gender ?></td>
      <td><?php echo $user->city ?></td>
      <td><?php echo $user->country ?></td>
      <td><?php echo date('d-m-Y H:i a', strtotime($user->created)); ?></td>
	  <td><?php echo anchor("users/delete/$user->id", "Delete"); ?></td>
    </tr>
	<?php endforeach; ?>
  </tbody>
</table>

	
<br/>	
<?php

echo $this->pagination->create_links();
