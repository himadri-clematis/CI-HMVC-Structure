<!doctype html>
<html dir="ltr" lang="en-US">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="EShop" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Admin:The marketplace</title>
</head>
<body>

<!-- header started -->
<?php  echo (isset($header))?$header:'';?>
  	<!-- header ended -->


  	<?php  echo (isset($content))?$content:'';?>  


	<!--   footer start -->
	<?php  echo (isset($footer))?$footer:'';?>
	<!-- footer end -->

    <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">

</body>
</html>