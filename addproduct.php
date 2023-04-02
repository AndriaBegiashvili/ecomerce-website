
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
    <script
      src="https://code.jquery.com/jquery-3.6.4.js"
      integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
      crossorigin="anonymous"
    ></script>
    <title>New Item</title>
  </head>
  <body>
      
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <h5 class="navbar-brand" href="#">Product Add</h5>
        <div>
          <a href="index.php" 
            ><button class="btn btn-danger">Cancel</button></a
          >
        </div>
      </div>
    </nav>
    <form action="addproduct.php" method="POST" id="product-form">
      <div class="card col-md-6 addbar">
        <div class="card-body">
          <div class="form-group">
            <h4 for="SKU">SKU</h4>
            <input type="text" class="form-control" id="SKU" name="SKU" required/>
            <?php
            include 'autoload.php';
            $type = new MainController;
            $type->addType()
            ?>
          </div>
          <br />

          <div class="form-group">
            <h4 for="name">Name</h4>
            <input type="text" class="form-control" id="name" name="Name" required />
          </div>
          <br />
          <div class="form-group">
            <h4 for="price">Price($)</h4>
            <input type="number" class="form-control" id="price" name="Price"required/>
          </div>
          <br />
          <div class="col-sm-3">
            <select
              class="form-select md sav productType"
              aria-label="Default select example"
              name="product_type"
              id = "productType"
              required
            >
              <option selected value="">Open this select menu</option>
              <option value="DVD">DVD</option>
              <option value="Furniture">Furniture</option>
              <option value="Book">Book</option>
            </select>
            <br>
          </div>
          <div class="div-containter">
            <div class="form-group content" id="DVD">
              <h4 for="size">Size (MB)</h4>
              <input type="number" class=" DVD form-control" id="size" name="Size"/>
              <br>
              <p>Please provide DVD size</p>
            </div>
            
            <div class="form-group content" id="Book" >
              <h4 for="weight">Weight (KG)</h4>
              <input type="number" class="Book form-control" id="weight" name="Weight" />
              <br>
              <p>Please provide book weight</p>
            </div>
            <div id="Furniture" class="content">
            <div class="form-group">
              <h4 for="height">Height (CM)</h4>
              <input type="number" class=" Furniture form-control" id="height" name="Height" />
</div>
            <div class="form-group ">
              <h4 for="width">Width (CM)</h4>
              <input type="number" class="Furniture form-control" id="width" name="Width" 
              />
            </div>
            <br />
            <div class="form-group ">
              <h4 for="length">Length (CM)</h4>
              <input type="number" class="Furniture form-control" id="length" name="Length" />
              <br>
              <p>Please provide furniture dimensions</p>
            </div>
          </div>
          </div>
          
          <a><button type="submit" name="bttn" class="btn btn-success sav col-sm-2">Save</button></a>
        </div>
      </div>
    
    </form>
    

    <script src="./index.js"></script>
    
  </body>
</html>
