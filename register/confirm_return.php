<?php
include('../admin/dbcon.php');
include('session.php');

	mysqli_query($conn,"UPDATE return_request SET status = 'confirmed' where not_id =''")or die(mysqli_error());
?>
<script>
window.location = 'return_request.php';
</script>
<?php

?>