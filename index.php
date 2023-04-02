
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/styles.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
      integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
      crossorigin="anonymous"
    ></script>
    <title>Product List</title>
  </head>
  <body>
  
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <h5 class="navbar-brand" href="#">Product List</h5>
        
        <div>
        <form action="index.php" method="post" >
          <a href="addproduct.php"
            ><button class="btn btn-success" type="button">Add item</button></a
          >
         
          <button class="btn btn-danger" type="submit" name="delete">Mass Delete</button>
          
        </div>

      </div>
    </nav>

    <div class="row">
      <?php
      include 'autoload.php';
      $obj = new MainController();
      $obj->displayData(); 
      $obj->deleteCard();
      ?>    
    </div>
    </form>
  </body>
</html>
