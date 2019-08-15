<!DOCTYPE html>
<html style="height:100%;">
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-79911051-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-79911051-3');
</script>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="/images/favicon.ico" type="image/x-icon">

<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/fonts.css">
<link rel="stylesheet" href="css/bco.css">
<link rel="stylesheet" href="css/registrystyle.css">

<script defer src="https://kit.fontawesome.com/55b2d7e574.js"></script>

<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script>
$(document ).ready(function() {

	$(".linkdiv_crcl, .linkdiv_rect").hover(function(){
			$(this).css("opacity", 0.7);
		}, function(){
			var jqId = "#linkdiv_1";
			$(this).css("opacity", 0.0);
	});

});
</script>


<script src="js/w3.js"></script>

</head>



<body style="min-height:100%;border:0px solid orange;">
<script>w3.includeHTML();</script>


<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
<div w3-include-html="global.header.html"></div>
<script>w3.includeHTML();</script>
</header>



<!-- pagecn div -->
<div class="w3-row pagecn">

	<!-- page logo div -->
	<div class="w3-col l8 s12 " style="width:100%;">
   		<div class="w3-card-4 noshadow pagelogo">
      			<img src="images/logo.about.png" height=100% >
  		</div>
	</div>
	<div class="w3-col l8 s12 " style="width:100%;color: #4A4A4A;margin-top:20px;border:0px solid blue"></div>
	<h3 id="search_title" align="center" width=85%> Search for a preferred domain! </h3>
</div>
 
<!-- Calls resultsFunc.php to display the results of the search query -->
<?php include 'php/resultsFunc.php';  ?>

<!-- Footer -->
<footer class="w3-container" style="position:absolute;bottom:-80px;width:100%;height:50px;background:#2E78B7;color:#fff;border:0px dashed red;">
<div w3-include-html="global.footer.html" style="padding:10px 0px 0px 0px;"></div>
</footer>

</body>
</html>
