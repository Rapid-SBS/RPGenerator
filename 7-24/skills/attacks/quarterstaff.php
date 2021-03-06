  <div class="row justify-content-center">

    <div id="attack-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Skull Bash -->  
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseSkullbash" role="button" aria-expanded="false" aria-controls="collapseSkullbash">
        <input type="radio" name="ability" value="Skull Bash" v-model="attackSelection">
        <h6>Skull Bash</h6>
      </label>

      <!-- Searing light -->
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseSearinglight" role="button" aria-expanded="false" aria-controls="collapseSearinglight">
        <input type="radio" name="ability" value="Searing light" v-model="attackSelection">
        <h6>Searing light</h6>
      </label>
      <br>
      <p class="jhide" id="attack-selection">{{attackSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="attack-quarterstaff" class="row mx-auto pad-10 max-wide-380">

   <!-- Skull Bash -->
    <div class="collapse mx-auto" id="collapseSkullbash" data-parent="#attack-quarterstaff">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Slam your quarterstaff into the skull of an enemy. <br>Double Critical Hit Chance.<br>DMG = Weapon ATT + Player ATT.<br>Costs 4 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">3</span>
            Weapon ATT
          </li>
        </ul>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-teal">2x</span>
            Crit Chance
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Searing Light -->
    <div class="collapse mx-auto" id="collapseSearinglight" data-parent="#attack-quarterstaff">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Fire a beam of intense light at your foe.<br>Applies Burn debuff.<br>DMG = 2 x (Player INT).<br> Costs 4 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->