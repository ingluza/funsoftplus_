<?php
session_start();

session_unset();
session_destroy();
 echo "<div style=\"text-align:center\">Tu Sesi&oacute;n ha sido finalizada.</div>";
?>
<script type="text/javascript">
	setTimeout("location.href='index.php'",3000);	
</script> 