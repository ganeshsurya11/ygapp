<table class='products'>
	<tr>
	<?php 
		$i = 0; 
		foreach($products as $product):	 
		if($i % 3 == 0) {echo "</tr><tr>"; }
		$i++;
	?>
		<td>
			<a href="<?php echo $product->product_id; ?>">
				<img width="200" height="200" src="<?php echo "/images/uploads/".$product->image_name ?>" />
			</a>
			<br/>
			<p><?php echo $product->product_name; ?></p>
			<p>Price - <?php echo $product->price; ?></p>
			<p><a href="<?php echo base_url();?>shopcart/add/<?php echo $product->product_id; ?>" class="button">Add to cart</a></p>
		</td>
	<?php endforeach; ?>
	</tr>
</table>