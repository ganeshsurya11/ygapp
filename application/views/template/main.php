<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
<title><?php echo (isset($title))? $title : "Welcome to Y & G"; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
<?php //echo link_tag('../css/styles.css'); ?>
<script src='<?php echo base_url(); ?>js/jquery.min.js'></script>


<!-- Load Queue widget CSS and jQuery -->
<style type="text/css">@import url(<?php echo base_url(); ?>js/plupload/jquery.plupload.queue/css/jquery.plupload.queue.css);</style>
<script type="text/javascript" src="<?php echo base_url(); ?>js/plupload/jquery.min.js"></script>

<!-- Third party script for BrowserPlus runtime (Google Gears included in Gears runtime now) -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/plupload/browserplus-min.js"></script>

<!-- Load plupload and all it's runtimes and finally the jQuery queue widget -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/plupload/plupload.full.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/plupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>

</head>

<body>
	<?php 	$this->load->view('template/header');  ?>
	<div id="wrapper">
		<div id="content_inside">
			<div style="width:90%; margin:0 auto">
				<?php echo static_helper::flash_success($this->session->flashdata('success')); ?>
				<?php echo static_helper::flash_error($this->session->flashdata('error')); ?>
			</div>
			<div class="top-menus">
				Welcome :
				<?php echo ($this->session->userdata('firstname'))?  $this->session->userdata('firstname') : "Guest"; ?>
				<br/>
				<br/>
				
				<?php  if($this->session->userdata('firstname')) { ?>
					<a href="<?php echo base_url(); ?>auth/logout">Logout</a> |
					<?php  if($this->session->userdata('role') == 'admin') { ?>
						<a href="<?php echo base_url(); ?>users/index">Users</a> |
						<a href="<?php echo base_url(); ?>products/index">Products</a> 
					<?php } ?>
				<?php } else {?>
					<a href="<?php echo base_url(); ?>auth">Login</a> |
					<a href="<?php echo base_url(); ?>users/create">Register</a> 
				<?php } ?> |
				<a href="<?php echo base_url(); ?>shopcart/index">Cart Contains(<b><?php echo $this->cart->total_items(); ?></b>)</a>
			</div>
			<table>
				<tr>
					<td width=200 vertical-align="top" align="left" >
						<div  class="left_menus" >
							<?php echo static_helper::loadCategories();  ?>
						</div>
					</td>
					<td width=700 vertical-align="top" align="left">
						<?php echo (isset($main_content)) ? $this->load->view($main_content) : show_404('Oops Page not found !'); ?>
					</td>
				</tr>
			</table/>	
		</div>
	 </div>
 	
	<?php $this->load->view('template/footer'); ?>
</body>
</html>
