<script type="text/javascript">
// Convert divs to queue widgets when the DOM is ready
$(function() {
    // Setup flash version
		var category_id = "";
		$('#categories').change(function(){
			category_id = $('#categories option:selected').val();	
			callPlupload(category_id);
		})
		callPlupload(category_id);
});

function callPlupload(category_id){
	pluploadQueue({
			// General settings
			runtimes : 'html5,html4,gears,flash,silverlight,browserplus',
			url : 'upload?cat_id='+category_id,
			max_file_size : '10mb',
			chunk_size : '1mb',
			unique_names : true,

			// Resize images on clientside if we can
			resize : {width : 320, height : 240, quality : 90},

			// Specify what files to browse for
			filters : [
					{title : "Image files", extensions : "jpg,gif,png"},
					{title : "Zip files", extensions : "zip"}
			],

			// Flash settings
			flash_swf_url : '/plupload/js/plupload.flash.swf'
	});
}	
</script>

Categories :
<select name="categories" id="categories">
	<option value="0">Select</option>
	<?php foreach($category as $cat):
	echo "<option value=$cat->id>$cat->menu_name</option>";
	 endforeach; ?>
</select>
