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

<div class="row">

  <table class="wide-275 text-center mar-40 table table-bordered mx-auto">
    <tbody>
      <tr>
        <td>Name</td>
        <td id="tb-rpg-name"> </td>
      </tr>
      <tr>
        <td>Class</td>
        <td id="tb-rpg-class"> </td>
      </tr>
      <tr>
        <td>Weapon</td>
        <td id="tb-rpg-weapon"> </td>
      </tr>
      <tr>
        <td>Item</td>
        <td id="tb-rpg-"> </td>
      </tr>
      <tr>
        <td>Item</td>
        <td id="tb-rpg-"> </td>
      </tr>
    </tbody>
  </table>

</div><!-- /.row -->

  <script>
	var rpgName = localStorage.getItem('rpgName');
  var rpgClass = localStorage.getItem('rpgClass');
  var rpgWeapon = localStorage.getItem('rpgWeapon');

  console.log("Class: " + rpgClass);

  $(document).ready(function(){

    $("#tb-rpg-class").text(rpgClass);

  });
</script>


<footer class="footer mt-auto text-center bg-light">
  <div class="container pad-20">
    <div class="pad-b-20">
      <a class="btn btn-dark text-white mar-r-10 mar-l-10" href="http://rapid-phyre.net" role="button">Restart</a>
      <a class="btn btn-dark text-white mar-r-10 mar-l-10" href="character.php" role="button">Return</a>
    </div>
    <span class="text-muted">&copy;RPGenius 2019. All Rights Reserved.</span>
  </div>
</footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
</body>

</html>
