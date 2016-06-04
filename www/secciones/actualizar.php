<section>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
 $(document).ready(function() {
 	 $("#responsecontainer").load("../layout/menu.php");
   var refreshId = setInterval(function() {
      $("#responsecontainer").load('../layout/menu.php');
   }, 3000);
   $.ajaxSetup({ cache: false });
});
</script>

</br></br></br>
<div id="responsecontainer">
	</br></br></br></br>
	<?php require("../layout/menu.php"); ?>
</div>
</section>