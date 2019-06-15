  <div class="row justify-content-center">

    <!-- Helix Strike -->
    <a class="btn text-white pad-10 mar-5 bg-blue" data-toggle="collapse" href="#collapseHelixstrike" role="button" aria-expanded="false" aria-controls="collapseHelixstrike">
      <h6>Helix Strike <span class="badge badge-light text-teal">6</span></h6>
    </a>

    <!-- Shatter -->  
    <a class="btn text-white pad-10 mar-5 bg-blue" data-toggle="collapse" href="#collapseShatter" role="button" aria-expanded="false" aria-controls="collapseShatter">
      <h6>Shatter <span class="badge badge-light text-teal">7</span></h6>
    </a>

  </div><!-- /.row -->

  <div id="attack-sword" class="row mx-auto pad-10">

    <!-- Helix Strike -->
    <div class="collapse mx-auto" id="collapseHelixstrike" data-parent="#attack-sword">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Gain momentum by spinning in place before<br>slamming your battleaxe into your opponent.<br>Double Critical Hit Chance.<br>DMG = Weapon ATT + Player ATT.<br>Costs 6 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">8</span>
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

    <!-- Shatter -->
    <div class="collapse mx-auto" id="collapseShatter" data-parent="#attack-sword">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Strike your enemy and shatter their defenses.<br>Lowers enemy DEF for 1 turn.<br>DMG = 2 x (Player ATT).<br> Costs 7 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">-4</span>
            Enemy DEF
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->