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
        <td>Level</td>
        <td id="tb-rpg-level"> </td>
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
        <td>HP</td>
        <td id="tb-rpg-hp"> </td>
      </tr>
      <tr>
        <td>ATT</td>
        <td id="tb-rpg-att"> </td>
      </tr>
      <tr>
        <td>DEF</td>
        <td id="tb-rpg-def"> </td>
      </tr>
      <tr>
        <td>INT</td>
        <td id="tb-rpg-int"> </td>
      </tr>
      <tr>
        <td>RES</td>
        <td id="tb-rpg-res"> </td>
      </tr>

      <tr>
        <td>Basic Ability</td>
        <td id="tb-rpg-basic"> </td>
      </tr>
      <tr>
        <td>Special Ability</td>
        <td id="tb-rpg-special"> </td>
      </tr>
      <tr>
        <td>Support Ability</td>
        <td id="tb-rpg-support"> </td>
      </tr>
      <tr>
        <td>Attack Ability</td>
        <td id="tb-rpg-attack"> </td>
      </tr>
      <tr>
        <td>Ultimate Abilty</td>
        <td id="tb-rpg-ultimate"> </td>
      </tr>

    </tbody>
  </table>

</div><!-- /.row -->

<script>
var rpgPlayerName = localStorage.getItem('rpgPlayerName');
var rpgPlayerLevel = localStorage.getItem('rpgPlayerLevel');
var rpgPlayerClass = localStorage.getItem('rpgPlayerClass');
var rpgPlayerWeapon = localStorage.getItem('rpgPlayerWeapon');

var rpgPlayerBaseHP = localStorage.getItem('rpgPlayerBaseHP');
var rpgPlayerBaseATT = localStorage.getItem('rpgPlayerBaseATT');
var rpgPlayerBaseDEF = localStorage.getItem('rpgPlayerBaseDEF');
var rpgPlayerBaseINT = localStorage.getItem('rpgPlayerBaseINT');
var rpgPlayerBaseRES = localStorage.getItem('rpgPlayerBaseRES');

var rpgPlayerBasicAbility = localStorage.getItem('rpgPlayerBasicAbility');
var rpgPlayerSpecialAbility = localStorage.getItem('rpgPlayerSpecialAbility');
var rpgPlayerSupportAbility = localStorage.getItem('rpgPlayerSupportAbility');
var rpgPlayerAttackAbility = localStorage.getItem('rpgPlayerAttackAbility');
var rpgPlayerUltimateAbility = localStorage.getItem('rpgPlayerUltimateAbility');

  $(document).ready(function(){

    $("#tb-rpg-name").text(rpgPlayerName);
    $("#tb-rpg-level").text(rpgPlayerLevel);
    $("#tb-rpg-class").text(rpgPlayerClass);
    $("#tb-rpg-weapon").text(rpgPlayerWeapon);

    $("#tb-rpg-hp").text(rpgPlayerBaseHP);
    $("#tb-rpg-att").text(rpgPlayerBaseATT);
    $("#tb-rpg-def").text(rpgPlayerBaseDEF);
    $("#tb-rpg-int").text(rpgPlayerBaseINT);
    $("#tb-rpg-res").text(rpgPlayerBaseRES);

    $("#tb-rpg-basic").text(rpgPlayerBasicAbility);
    $("#tb-rpg-special").text(rpgPlayerSpecialAbility);
    $("#tb-rpg-support").text(rpgPlayerSupportAbility);
    $("#tb-rpg-attack").text(rpgPlayerAttackAbility);
    $("#tb-rpg-ultimate").text(rpgPlayerUltimateAbility);

  });

  console.log("Name: " + rpgPlayerName);
  console.log("Level: " + rpgPlayerLevel);
  console.log("Class: " + rpgPlayerClass);
  console.log("Weapon: " + rpgPlayerWeapon);

  console.log("HP: " + rpgPlayerBaseHP);
  console.log("ATT: " + rpgPlayerBaseATT);
  console.log("DEF: " + rpgPlayerBaseDEF);
  console.log("INT: " + rpgPlayerBaseINT);
  console.log("RES: " + rpgPlayerBaseRES);

  console.log("Basic Ability: " + rpgPlayerBasicAbility);
  console.log("Special Ability: " + rpgPlayerSpecialAbility);
  console.log("Support Ability: " + rpgPlayerSupportAbility);
  console.log("Attack Ability: " + rpgPlayerAttackAbility);
  console.log("Ultimate Ability: " + rpgPlayerUltimateAbility);
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
