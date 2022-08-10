<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css_add.css" type="text/css">

    <title>Php_CRUD</title>
  </head>
  <body>
    <div class="container">

    <?php include('message.php')?>

      <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> OJT Add
                            <a href="" class="btn btn-danger  float-end">BACK</a>
                        </h4>                    
                    </div>
    <div class="card-body">
        <form action="code.php" method="POST">
          <div class="mb-3">
             <label>OJT Name</label>
             <input type="text" name="name" class="form-controller">
          </div>

          <div class="mb-3">
             <label>OJT Email</label>
             <input type="email" name="email" class="form-controller">
          </div>

          <div class="mb-3">
             <label>OJT Mobile</label>
             <input type="text" name="mobile" class="form-controller">
          </div>
          
          <div class="mb-3">
             <label>OJT Password</label>
             <input type="text" name="password" class="form-controller">
          </div>

          <div class="mb-4 ">
             <button type="submit" name="save_intern" class="button button-save"> Save Intern </button>
          </div>

        </form>
                        </div>
                </div>
            </div>

      </div>
    </div>

</body>
</html>