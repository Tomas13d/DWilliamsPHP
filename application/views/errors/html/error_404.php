<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Page Not Found</title>
<style type="text/css">

::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }

.not-found-cont {
	width: 80%;
	margin: 0 auto;
	text-align: center;
	margin-top: 20px;
}

.not-found-img {
	width: 500px;
	height: 450px;
}
.no-found-text {
	margin: 20px;
	text-align: center;
	font-weight: 500;
}
</style>
</head>
<body>
<section class="vision-sect">
    <div class="not-found-cont">
    <img src="<?php echo base_url('public/assets/images/notFound.png'); ?>" class="not-found-img" alt="Not-found">
        <p class="general-text no-found-text">Lo sentimos, no hemos encontrado esta pagina.</p>
    </div>
</section>
</body>
</html>