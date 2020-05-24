
 <div class="container">

      <div class="main">
         <div class="row">
            <div class="col-md-6 justify-content-center mt-5 pt-4">
            <div class="container">
              <h3><?=$user['nama'];?></h3>
              <hr>
              <?php if (session()->get('success')): ?>
                <div class="alert alert-success" role="alert">
                  <?=session()->get('success')?>
                </div>
              <?php endif;?>

         <form method="post" action="/profile">
            <div class="form-group">
             <label for="exampleInputEmail1">Nama</label>
             <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" value="<?=$user['nama']?>" required="">
             <small id="emailHelp" class="form-text text-muted">Nama.</small>
           </div>
           <div class="form-group">
             <label for="exampleInputEmail1">Email</label>
             <input type="email" class="form-control" id="email" name="email"  aria-describedby="emailHelp" value="<?=$user['email']?>" required="" readonly="">
             <small id="emailHelp" class="form-text text-muted">Email.</small>
           </div>
           <div class="form-group">
             <label for="exampleInputEmail1">Level</label>
             <input type="text" class="form-control" id="level" name="level" aria-describedby="emailHelp" readonly="">
             <small id="emailHelp" class="form-text text-muted">Level.</small>
           </div>
           <div class="form-group">
             <label for="password">Password</label>
             <input type="password" class="form-control" id="password" name="password">
           </div>
                <?php if (isset($validation)): ?>
                  <div class="col-12">
                    <div class="alert alert-danger" role="alert">
                      <?=$validation->listErrors()?>
                    </div>
                  </div>
                <?php endif;?>

           <button type="submit" class="btn btn-primary">Submit</button>

           <a href="/logout" class="btn btn-primary">Logout</a>
      </form>
            </div>
            </div>
         </div>
      </div>
</div>
