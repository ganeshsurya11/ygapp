<form action="update" method="post">
<table class="table table-striped table-bordered" border="1">
  <thead>
  </thead>
  <thead>
    <tr>
      <th style="width:20%;">Image</th>
      <th style="width:20%;">Name</th>
      <th style="width:10%;">Price</th>
      <th>Description</th>
      <th style="width:10%;">Quantity</th>
      <th style="width:8%;">Totals</th>
    </tr>
  </thead>

  <tbody>
  <?php foreach($products as $product): ?>
    <tr>
	
      <td><img src="<?php echo base_url()."images/uploads/".$product['options']['image_name']; ?>" width="100" height="100"></td>
      <td><?php echo $product['name']; ?></td>
      <td><?php echo $product['price']; ?></td>
      <td><?php echo $product['qty']; ?></td>
      <td style="white-space:nowrap"><div class="control-group">
          <div class="controls">
            <div class="input-append">
              <input type="text" size="3" value="<?php  echo $product['qty']; ?>" name="qty[]" style="margin:0px;" class="span1">
              <input type="hidden" size="3" value="<?php  echo $product['rowid']; ?>" name="rowid[]" style="margin:0px;" class="span1">
              <?php echo anchor("shopcart/remove/".$product['rowid'], "Remove"); ?></div>
          </div>
        </div></td>
      <td><?php echo $product['price']; ?></td>
    </tr>
	<?php endforeach; ?>
  </tbody>
  <tfoot>
    <tr>
      <td colspan="5"><strong style="float:right">Subtotal</strong></td>
      <td id="gc_subtotal_price" align="right"><?php echo $this->cart->total(); ?></td>
    </tr>
    <tr>
      <td colspan="5">
		<strong  style="float:right">Grand Total</strong>
		</td>
      <td><?php echo $this->cart->total(); ?></td>
    </tr>
  </tfoot>
</table>
<input type="submit" value="Update" />
<input type="button" value="Checkout" />
</form>