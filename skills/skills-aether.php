  <div id="rpg-skills-lvl-10" class="border-top pad-20 overlay" style="width: 100%;">

    <div class="row pad-10"><h5 class="mx-auto">LEVEL 10</h5></div>
    <?php include 'passives/attack2.php'; ?>

  </div><!-- / Level 10 -->

  <div id="rpg-skills-lvl-9" class="border-top pad-20" style="width: 100%;">
    
    <div class="row pad-10"><h5 class="mx-auto">LEVEL 9</h5></div>
    <?php include 'passives/mana2.php'; ?>

  </div><!-- / Level 9 -->

  <div id="rpg-skills-lvl-8" class="border-top pad-20" style="width: 100%;">
    
    <div class="row pad-10"><h5 class="mx-auto">LEVEL 8</h5></div>
    <?php include 'ultimates/aether.php'; ?>

  </div><!-- / Level 8 -->

  <div id="rpg-skills-lvl-7" class="border-top pad-20" style="width: 100%;">
    
    <div class="row pad-10"><h5 class="mx-auto">LEVEL 7</h5></div>
    <?php include 'passives/defense2.php'; ?>

  </div><!-- / Level 7 -->

  <div id="rpg-skills-lvl-6" class="border-top pad-20" style="width: 100%;">
    
    <div class="row pad-10"><h5 class="mx-auto">LEVEL 6</h5></div>
    <?php include 'passives/attack1.php'; ?>

  </div><!-- / Level 6 -->

  <div id="rpg-skills-lvl-5" class="border-top pad-20" style="width: 100%;">
    
    <div class="row pad-10"><h5 class="mx-auto">LEVEL 5</h5></div>
    <?php include 'attacks/aether.php'; ?>

  </div><!-- / Level 5 -->

  <div id="rpg-skills-lvl-4" class="border-top pad-20" style="width: 100%;">
    
    <div class="row pad-10"><h5 class="mx-auto">LEVEL 4</h5></div>
    <?php include 'passives/mana1.php'; ?>

  </div><!-- / Level 4 -->

  <div id="rpg-skills-lvl-3" class="border-top pad-20" style="width: 100%;">
    
    <div class="row pad-10"><h5 class="mx-auto">LEVEL 3</h5></div>
    <?php include 'passives/defense1.php'; ?>

  </div><!-- / Level 3 -->

  <div id="rpg-skills-lvl-2" class="border-top pad-20" style="width: 100%;">
    
    <div class="row pad-10"><h5 class="mx-auto">LEVEL 2</h5></div>
    <?php include 'supports/aether.php'; ?>

  </div><!-- / Level 2 -->

  <div id="rpg-skills-lvl-1" class="border-top pad-20" style="width: 100%;">
    
    <div class="row pad-10"><h5 class="mx-auto">LEVEL 1</h5></div>
    <?php include 'passives/vitality.php'; ?>

  <script>
    $(document).ready(function(){
      console.log(player.level);
      if (player.level <= 3) { 
        $("#rpg-skills-lvl-3 > div > a.btn").addClass("disabled"); 
        $("#rpg-skills-lvl-3").addClass("overlay"); 
      }
      if (player.level <= 2) { $("#rpg-skills-lvl-2 > div > a.btn").addClass("disabled"); }
      if (player.level <= 1) { $("#rpg-skills-lvl-1 > div > a.btn").addClass("disabled"); }
    });
  </script>
  </div><!-- / Level 1 -->

