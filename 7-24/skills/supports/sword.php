  <div class="row justify-content-center">

    <div id="support-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Taunt -->  
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseTaunt" role="button" aria-expanded="false" aria-controls="collapseTaunt"><input type="radio" name="picked" value="Taunt" v-model="supportSelection">
        <h6>Taunt</h6>
      </label>

      <!-- Diversion -->
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseDiversion" role="button" aria-expanded="false" aria-controls="collapseDiversion">
        <input type="radio" name="picked" value="Diversion" v-model="supportSelection">
        <h6>Diversion</h6>
      </label>
      <br>
      <p class="jhide" id="support-selection">{{supportSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="support-sword" class="row mx-auto pad-10 max-wide-380">

    <!-- Taunt -->
    <div class="collapse mx-auto" id="collapseTaunt" data-parent="#support-sword">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Force enemies to direct single-target attacks towards you for 2 turns.<br>You may perform another action this turn.<br>Costs 2 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Diversion -->
    <div class="collapse mx-auto" id="collapseDiversion" data-parent="#support-sword">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Distract an enemy, giving your allies a chance to target its weak point.<br>Lowers enemy DEF for 1 turn.<br>Costs 3 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-green">-3</span>
            Enemy DEF
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->