
  <div class="container">

      <div class="main">
         <div class="row">
            <div class="col-md-6 justify-content-center mt-5 pt-4">

            <div class="card">
              <h5 class="card-header">Halo, <?=session()->get('level');?></h5>
              <div class="card-body">
                <h5 class="card-title"><?=session()->get('nama');?></h5>
                <p class="card-text">Berharap Virus COVID-19 Segera Berakhir. Amiiinn</p>
                <a href="/profile" class="btn btn-primary">Profil</a>
                <a href="/logout" class="btn btn-primary">Log Out</a>
              </div>
            </div>

            </div>
         </div>
      </div>

