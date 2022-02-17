<?php
// include "partials/connect.php";
// $db = new Database();
// var_dump($db);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- Fontowsome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Emobilis-Project</title>
  </head>
  <body>
    <h1 class="bg-dark text-light text-center py-2">Emobilis Final Project</h1>

    <!-- Modal -->
    <?php include("form.php"); ?>
    <?php include("profile.php"); ?>
    <!-- End Modal -->

    <!-- Search bar and Button section -->
    <div class="container">
        <div class="row mb-3">
            <div class="col-10">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-dark">
                            <i class="fas fa-search text-light"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search user">
                </div>
            </div>
            <div class="col-2">
                <button class="btn btn-dark text-light" data-toggle="modal" data-target="#usermodal">Add User</button>
            </div>
        </div>
        <!-- table -->
        <?php include("usertable.php"); ?>
        
    </div>
    <!-- End Search bar -->

    <!-- jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <!-- Custom js -->
    <script src="js/script.js"></script>
  </body>
</html>