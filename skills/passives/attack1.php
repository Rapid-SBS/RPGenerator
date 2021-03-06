  <div class="row justify-content-center">

    <div id="lvl-6-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- ATT Boost I -->
      <label class="btn text-white pad-10 mar-5 btn-paleblue" data-toggle="collapse" href="#collapseATTboost1" role="button" aria-expanded="false" aria-controls="collapseATTboost1">
        <input type="radio" name="passive" value="ATT I" v-model="lvl6Selection">
        <h6>ATT Boost I</h6>
      </label>

      <!-- INT Boost I -->
      <label class="btn text-white pad-10 mar-5 btn-paleblue" data-toggle="collapse" href="#collapseINTboost1" role="button" aria-expanded="false" aria-controls="collapseINTboost1">
        <input type="radio" name="passive" value="INT I" v-model="lvl6Selection">
        <h6>INT Boost I</h6>
      </label>

      <br>
      <p class="jhide" id="lvl-6-selection">{{lvl6Selection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="passive-attack1" class="row mx-auto pad-10">

    <!-- ATT Boost I -->
    <div class="collapse mx-auto" id="collapseATTboost1" data-parent="#passive-attack1">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Passive Skill</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Permanently increase ATT by 1.<br>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">+1</span>
            ATT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- INT Boost I -->
    <div class="collapse mx-auto" id="collapseINTboost1" data-parent="#passive-attack1">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Passive Skill</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Permanently increase INT by 1.<br>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-purple">+1</span>
            INT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->