<ul class="nav nav-pills nav-stacked">
	<li role="presentation" id="ads"><a href="addBusiness.php">Add Ads</a></li>
	<!-- <li role="presentation"><a href="updateAd.php">Update Ads</a></li> -->
	<li role="presentation" id="listAd" class="active"><a href="listAdds.php">List Ads</a></li>
</ul>

<script>
   /* Which menu is active  */
 	$(".nav li").click(function() {
		var anchorId = $(this).attr('id');
		// console.log(anchorId);
 
		$(".nav li").removeClass('current');
		$('#' + anchorId).addClass('current');
	}); 
</script>