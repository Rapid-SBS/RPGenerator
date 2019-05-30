<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

  <title>RPGenerator</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/spacing.css">
  <link rel="stylesheet" type="text/css" href="css/colors.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

<div class="y-flex-container pad-10">

<?php include 'weapons/warrior-sword.php'; ?>

	<button type="button" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-sword" style="display: none;">Select</button>

<?php include 'weapons/warrior-halberd.php'; ?>

	<button type="button" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-halberd" style="display: none;">Select</button>

<?php include 'weapons/warrior-battleaxe.php'; ?>

	<button type="button" class="btn btn-primary rpg-wpn-select-btn" id="rpg-wpn-btn-battleaxe" style="display: none;">Select</button>

<script>
$(document).ready(function(){
  $(".rpg-wpn-sword").click(function(){
  	$(".rpg-wpn-select-btn").slideUp(500);
    $("#rpg-wpn-btn-sword").slideDown(500);
  });
	$(".rpg-wpn-halberd").click(function(500){
  	$(".rpg-wpn-select-btn").slideUp();
    $("#rpg-wpn-btn-halberd").slideDown(500);
  });
	$(".rpg-wpn-battleaxe").click(function(500){
  	$(".rpg-wpn-select-btn").slideUp();
    $("#rpg-wpn-btn-battleaxe").slideDown(500);
  });

});
</script>

</div><!-- /.y-flex-container -->

<footer class="footer mt-auto text-center bg-light">
  <div class="container pad-20">
    <span class="text-muted">&copy;RPGenius 2019. All Rights Reserved.</span>
  </div>
</footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
</body>

</html>
