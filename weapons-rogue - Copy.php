<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

  <title>RPGenerator</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/spacing.css">
  <link rel="stylesheet" type="text/css" href="css/colors.css">

</head>

<body>
<div class="container pad-10">

  <!-- Daggers-->
  <div class="row justify-content-center">
  <div class="col-4">
  <div class="card text-white bg-gray mb-2" style="max-width: 18rem;">
    <div class="accordion" id="accordion-dagger">
      <div class="card-header text-center">
        <h4>Dagger</h4>
      </div>
      <div class="card-header pad-5 text-center">
        <button class="btn btn-link text-white text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <h6>Stab<h6>
       </button>
    </div>
      <div id="collapseThree" class="collapse hidden" aria-labelledby="headingThree" data-parent="#accordion-dagger">
       <div class="card-body text-center">
              <p class="card-text text-center">Get stabby. <br> Double Critical Hit Chance. <br>DMG = Weapon ATT + Player ATT.</p>
            </div>
            <ul class="list-group text-center">
              <li class="list-group-item align-items-center bg-gray" style="padding: .35rem 1.25rem;">
                <span class="badge badge-light text-orange">3</span>
                Weapon ATT
              </li>
            </ul>
      </div>
      <div class="card-header pad-5 text-center">
        <button class="btn btn-link text-white text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
            <h6>Poisoned Blade <span class="badge badge-light text-teal">2</span></h6>
        </button>
      </div>
      <div id="collapseFour" class="collapse hidden" aria-labelledby="headingFour" data-parent="#accordion-dagger">
        <div class="card-body text-center">
          <p class="card-text text-center">Deals damage and applies Poisoned debuff. <br>DMG = Weapon ATT + Player ATT. <br>Costs 2 Mana.<br>
          </div>
          <ul class="list-group text-center">
            <li class="list-group-item align-items-center bg-gray" style="padding: .35rem 1.25rem;">
              <span class="badge badge-light text-orange">2</span>
              Weapon ATT
            </li>
          </ul>
      </div>
  </div>   
  </div><!-- /.card -->    
  </div><!-- /.accordion -->
  </div><!-- /.row -->

  <!-- Dual Sai-->
  <div class="row justify-content-center">
  <div class="col-4">
  <div class="card text-white bg-gray mb-2" style="max-width: 18rem;">
    <div class="accordion" id="accordion-dualsai">
      <div class="card-header text-center">
        <h4>Dual Sai</h4>
      </div>
      <div class="card-header pad-5 text-center">
        <button class="btn btn-link text-white text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
          <h6>Riposte<h6>
       </button>
      </div>
      <div id="collapseFive" class="collapse hidden" aria-labelledby="headingFive" data-parent="#accordion-dualsai">
      <div class="card-body text-center">
              <p class="card-text text-center">Grants bonus DEF during combat. <br>DMG = Weapon ATT + Player ATT. </p>
      </div>
            <ul class="list-group text-center">
              <li class="list-group-item align-items-center bg-gray" style="padding: .35rem 1.25rem;">
                <span class="badge badge-light text-orange">4</span>
                Weapon ATT
              </li>
            </ul>
            <ul class="list-group text-center">
              <li class="list-group-item align-items-center bg-gray" style="padding: .35rem 1.25rem;">
                <span class="badge badge-light text-green">+3</span>
                Bonus DEF
              </li>
            </ul>
      </div>
      <div class="card-header pad-5 text-center">
        <button class="btn btn-link text-white text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
            <h6>Ultimate Bladeworks <span class="badge badge-light text-teal">4</span></h6>
        </button>
    </div>
    <div id="collapseSix" class="collapse hidden" aria-labelledby="headingSix" data-parent="#accordion-dualsai">
      <div class="card-body text-center">
        <p class="card-text text-center">Attacks all enemies extremely fast.<br> Double Critical Hit Chance. <br>DMG = Weapon ATT + Player ATT<br>Costs 4 Mana.</p>
      </div>
        <ul class="list-group text-center">
          <li class="list-group-item align-items-center bg-gray" style="padding: .35rem 1.25rem;">
            <span class="badge badge-light text-orange">3</span>
            Weapon ATT
          </li>
        </ul>

      </div>
  </div>   
  </div><!-- /.card -->    
  </div><!-- /.accordion -->
  </div><!-- /.row -->

  <!-- Shuriken -->
  <div class="row justify-content-center">
  <div class="col-4">
  <div class="card text-white bg-gray mb-2" style="max-width: 18rem;">
    <div class="accordion" id="accordion-shuriken">
      <div class="card-header text-center">
        <h4>Shuriken</h4>
      </div>
      <div class="card-header pad-5 text-center">
        <button class="btn btn-link text-white text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h6>Shuriken Throw<h6>
       </button>
    </div>
      <div id="collapseOne" class="collapse hidden" aria-labelledby="headingOne" data-parent="#accordion-shuriken">
       <div class="card-body text-center">
          <p class="card-text text-center">Double Critical Hit/Miss Chance. <br>DMG = Weapon ATT + Player ATT. </p>
        </div>
        <ul class="list-group text-center">
          <li class="list-group-item align-items-center bg-gray" style="padding: .35rem 1.25rem;">
            <span class="badge badge-light text-orange">4</span>
            Weapon ATT
          </li>
        </ul>
      </div>
      <div class="card-header pad-5 text-center">
        <button class="btn btn-link text-white text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <h6>Smoke Bomb <span class="badge badge-light text-teal">4</span></h6>
        </button>
    </div>
      <div id="collapseTwo" class="collapse hidden" aria-labelledby="headingTwo" data-parent="#accordion-shuriken">
       <div class="card-body text-center">
          <p class="card-text text-center">Grants Hidden buff for 2 turns. <br>Costs 4 Mana.</p>
        </div>
        <ul class="list-group text-center">
          <li class="list-group-item align-items-center bg-gray" style="padding: .35rem 1.25rem;">
            <strong>Hidden</strong>: You cannot be targeted.
          </li>
        </ul>
      </div>
  </div>   
  </div><!-- /.card -->    
  </div><!-- /.accordion -->
  </div><!-- /.row -->

</div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
</body>

</html>