<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">

    <title>Halaman Login</title>
  </head>
  <body>


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

              <div class="alert alert-danger" role="alert">
                    <?=isset($pesan) ? $pesan : ''?>
              </div>


                <a href="/pagelogin"><button type="button" class="btn btn-secondary">
                     Kembali
                </button>  </a>
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

         <form method="post" action="/pagelogin/create">
            <div class="form-group">
             <label for="exampleInputEmail1">Nama</label>
             <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" required="">
             <small id="emailHelp" class="form-text text-muted">Nama.</small>
           </div>
           <div class="form-group">
             <label for="exampleInputEmail1">Email</label>
             <input type="email" class="form-control" id="email" name="email"  aria-describedby="emailHelp" required="">
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

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>