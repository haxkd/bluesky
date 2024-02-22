<?php
session_start();
$_SESSION['admin'] == "";
session_unset();
$_SESSION['errmsg'] = "You have successfully logout";
?>
<script language="javascript">
document.location="login.php";
</script>
