<?php
$maindir = '../';
include($maindir.'config.php');
include('./check.php');
?>
<!DOCTYPE html>
<html>
<title>Back End | <?php echo sitetitle; ?></title>
<?php include($maindir.'inc/heads.php'); ?>
<body>

<?php include('./menubar.php');?>

<script>
$(" #dashboard ").addClass('active');
</script>
</body>
</html>
