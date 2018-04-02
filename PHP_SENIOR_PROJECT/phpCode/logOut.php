<?php 
include "head.php";
session_unset();
session_destroy();
echo "<script>
alert('Thanks for stopping by! Have a great day!');
location.href = 'index.php';
</script>";
?>

