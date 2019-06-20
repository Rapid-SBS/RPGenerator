 <script>
  var player = JSON.parse(localStorage.getItem('objPlayer'));
  var skills = JSON.parse(localStorage.getItem('objSkills'));
  
  var passives = {
      one: '',
      three: '',
      four: '',
      six: '',
      seven: '',
      nine: '',
      ten: ''
    }

  skills = {
      hp: 0,
      att: 0,
      def: 0,
      int: 0,
      res: 0,
    }

  player.level = 10;

  new Vue({ el: '#attack-select',
  data: { attackSelection: '' } })

  new Vue({ el: '#support-select',
  data: { supportSelection: '' } })

  new Vue({ el: '#ultimate-select',
  data: { ultimateSelection: '' } })

  new Vue({ el: '#lvl-1-select',
  data: { lvl1Selection: '' } })

  new Vue({ el: '#lvl-3-select',
  data: { lvl3Selection: '' } })

  new Vue({ el: '#lvl-4-select',
  data: { lvl4Selection: '' } })

  new Vue({ el: '#lvl-6-select',
  data: { lvl6Selection: '' } })

  new Vue({ el: '#lvl-7-select',
  data: { lvl7Selection: '' } })

  new Vue({ el: '#lvl-9-select',
  data: { lvl9Selection: '' } })

  new Vue({ el: '#lvl-10-select',
  data: { lvl10Selection: '' } })


  $(document).ready(function(){
    console.log(player.level);
    if (player.level < 10) { 
      $("#rpg-skills-lvl-10 > div > div > label").addClass("disabled unclickable"); 
      $("#rpg-skills-lvl-10").addClass("overlay"); 
    }
    if (player.level < 9) { 
      $("#rpg-skills-lvl-9 > div > div > label").addClass("disabled unclickable"); 
      $("#rpg-skills-lvl-9").addClass("overlay"); 
    }
    if (player.level < 8) { 
      $("#rpg-skills-lvl-8 > div > div > label").addClass("disabled unclickable"); 
      $("#rpg-skills-lvl-8").addClass("overlay"); 
    }
    if (player.level < 7) { 
      $("#rpg-skills-lvl-7 > div > div > label").addClass("disabled unclickable"); 
      $("#rpg-skills-lvl-7").addClass("overlay"); 
    }
    if (player.level < 6) { 
      $("#rpg-skills-lvl-6 > div > div > label").addClass("disabled unclickable"); 
      $("#rpg-skills-lvl-6").addClass("overlay"); 
    }
    if (player.level < 5) { 
      $("#rpg-skills-lvl-5 > div > div > label").addClass("disabled unclickable"); 
      $("#rpg-skills-lvl-5").addClass("overlay"); 
    }
    if (player.level < 4) { 
      $("#rpg-skills-lvl-4 > div > div > label").addClass("disabled unclickable"); 
      $("#rpg-skills-lvl-4").addClass("overlay"); 
    }
    if (player.level < 3) { 
      $("#rpg-skills-lvl-3 > div > div > label").addClass("disabled unclickable"); 
      $("#rpg-skills-lvl-3").addClass("overlay"); 
    }
    if (player.level < 2) { 
      $("#rpg-skills-lvl-2 > div > div > label").addClass("disabled unclickable"); 
      $("#rpg-skills-lvl-2").addClass("overlay"); 
    }
    if (player.level < 1) { 
      $("#rpg-skills-lvl-1 > div > div > label").addClass("disabled unclickable");
      $("#rpg-skills-lvl-1").addClass("overlay"); 
    }
  });

  $(document).ready(function(){ // ----- Save Skills -----

    $("#save-name").click(function(){
      skills.attack = $("#attack-selection").text();
      skills.support = $("#support-selection").text();
      skills.ultimate = $("#ultimate-selection").text();
      passives.one = $("#lvl-1-select").text();
      passives.three = $("#lvl-3-select").text();
      passives.four = $("#lvl-4-select").text();
      passives.six = $("#lvl-6-select").text();
      passives.seven = $("#lvl-7-select").text();
      passives.nine = $("#lvl-9-select").text();
      passives.ten = $("#lvl-10-select").text();

      console.log(skills);
      console.log(passives);
/*
    if ($("#lvl-1-select").text() == "Vitality") { 
        skills.hp = 1; 
      }
    if ($("#lvl-3-select").text() == "DEF I") { 
        skills.def = 1; 
      } */

      localStorage.setItem('objSkills', JSON.stringify(skills));

      $('#skills-saved').fadeIn('slow', function(){
        $('#skills-saved').delay(2000).fadeOut(); }
      )
    });
  });

  </script>

  <script> // --- Toggles active state on radio buttons ---
  $('label').click(function() {
     $(this).addClass("active")
            .siblings('label').removeClass("active");
  });
  </script>

  <div id="skills-saved" class="text-white text-center pad-10 bg-lightgreen" style="display: none; width: 100%">
    <h5 class="pad-10">Skills Saved!</h5>
  </div>

<footer class="footer mt-auto text-center pad-t-10 bg-lightgray">
  <div class="container pad-20">
    <div class="pad-b-20">
      <button class="btn btn-dark text-white mar-r-10 mar-l-10" onclick="goBack()" role="button">Return</button>
      <button id="save-name" type="submit" class="btn btn-primary">Save Loadout</button>
    </div>
    <span class="text-muted">&copy;RPGenius 2019. All Rights Reserved.</span>
  </div>

  <script>
    function goBack() {
      window.history.back();
    }
  </script>

</footer>
