  <div class="row justify-content-center">

    <!-- Nova Beam -->  
    <a class="btn text-white pad-10 mar-5 bg-purple" data-toggle="collapse" href="#collapseNovabeam" role="button" aria-expanded="false" aria-controls="collapseNovabeam">
      <h6>Nova Beam <span class="badge badge-light text-teal">9</span></h6>
    </a>

    <!-- Meteor Strike -->
    <a class="btn text-white pad-10 mar-5 bg-purple" data-toggle="collapse" href="#collapseMeteorstrike" role="button" aria-expanded="false" aria-controls="collapseMeteorstrike">
      <h6>Meteor Strike <span class="badge badge-light text-teal">14</span></h6>
    </a>


  </div><!-- /.row -->

  <div id="ultimate-fire" class="row mx-auto pad-10">

    <!-- Nova Beam -->
    <div class="collapse mx-auto" id="collapseNovabeam" data-parent="#ultimate-fire">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Fire a beam so hot that it<br>pierces all enemy defenses.<br> Ignores all enemy RES. <br> DMG = 3 x (Player INT).<br> Costs 9 Mana.</p> 
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            Enemy RES = <span class="badge bg-white text-blue">0</span>
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Meteor Strike -->
    <div class="collapse mx-auto" id="collapseMeteorstrike" data-parent="#ultimate-fire">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Summon a meteor from the heavens<br>to crash into your enemies. <br> DMG = 4 x (Player INT).<br> Costs 14 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->