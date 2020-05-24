<div class="container">

<div class="sidenav">
         <div class="login-main-text">
            <h2>Halaman Khusus<br> Login.</h2>
            <p>Login atau register dulu okey!!.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-8 ">
            <div class="login-form">
                  <?php if (session()->get('success')): ?>
                      <div class="alert alert-success" role="alert">
                        <?=session()->get('success')?>
                      </div>
                  <?php endif;?>


                  <?php if (isset($validation)): ?>
                      <div class="alert alert-danger" role="alert">
                        <?=$validation->listErrors()?>
                      </div>
                  <?php endif;?>

               <form method="post" action="/loginer">
                <?php csrf_token();?>
                  <h2>Isi dengan data yang benar.</h2><br>
                  <div class="form-group">
                     <label>E-mail</label>
                     <input type="text" class="form-control" name="email" id="email" value="<?=set_value('email')?>" placeholder="Email">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-primary">Login</button>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#staticBackdrop">
                     Register
                  </button>
               </form>
            </div>
         </div>
      </div>

</div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Register User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

         <form method="post" action="/regis">
           <?php csrf_field();?>
            <div class="form-group">
             <label for="exampleInputEmail1">Nama</label>
             <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" required="" value="<?=set_value('nama')?>" required>
             <small id="emailHelp" class="form-text text-muted">Nama.</small>
           </div>
           <div class="form-group">
             <label for="exampleInputEmail1">Email</label>
             <input type="email" class="form-control" id="email" name="email"  aria-describedby="emailHelp" required="" value="<?=set_value('email')?>" required>
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
           <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>