<?php
include 'db_config.php';
$nim = $_GET['nim'];
$delete = new Database;
$delete = $delete->delete($nim);
echo "<script>
alert('Deleted Data Success');
window.location = 'index.php';
</script>";