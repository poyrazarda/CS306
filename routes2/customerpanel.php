<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">E-Commerce Website</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Main Page</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Panels
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./adminpanel.php">Admin Panel</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="customerpanel.php">Customer Panel</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Support 
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="insert_as_client.php">Send a message to admin</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="adminlist.php">See messages coming from admin</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<html>
    <body>
        <div class="container" style="height: 8px">     
        </div>
        <h1 style="text-align: center">E-Commerce Customer Panel</h1>
        <hr class="border border-primary border2 opacity-75" style="border-color:blueviolet; background-color: red">
      <div class="row">
        <div class="col">
          <div class="container center">
      <div class="row">
        <div class="col">
          <div class="container center">
          <div class="card mb-3" style="max-width: 660px; top: 20px">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="./images/orders.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body" style="height: 220px">
                  <h5 class="card-title">Orders</h5>
                  <p class="card-text">You can create new orders</p>
                  <p class="card-text"><small class="text-muted">Click to create</small></p>
                  <div class="row">
                     <div class="col-6">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Select
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/ecommerce/insertion_order.html">Create</a></li>                       
                      </ul>
                      </div> 
                     </div>
                  </div>            
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3" style="max-width: 660px; top: 20px">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="./images/tic_sup.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body" style="height: 220px">
                  <h5 class="card-title">Ticket Messages</h5>
                  <p class="card-text" style="height:72px">You can send new ticket message.</p>
                  <p class="card-text"><small class="text-muted">Click to send.</small></p>
                  <div class="row">
                     <div class="col-6">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Select
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/ecommerce/insertion_ticket_cus.html">Send</a></li>                       
                      </ul>
                      </div> 
                     </div>
                  </div>          
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
        <div class="col">
          <div class="container center">
          <div class="card mb-3" style="max-width: 660px; top: 20px">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="./images/products2.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body" style="height: 220px">
                  <h5 class="card-title">Products</h5>
                  <p class="card-text">You can see products.</p>
                  <p class="card-text"><small class="text-muted">Click to see.</small></p>
                  <div class="row">
                     <div class="col-6">
                      <div class="dropend">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Product list
                      </button>
                      <ul class="dropdown-menu" style="background-color: grey">
                        <div class="container" >
                       <?php     
                           include "tables/products_table.php";
                        ?>
                        </div>
                       </ul>
                      </div> 
                     </div>
                  </div>            
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3" style="max-width: 660px; top: 20px">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="./images/make_pay.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body" style="height: 220px">
                  <h5 class="card-title">Make Payment</h5>
                  <p class="card-text">You can make payment.</p>
                  <p class="card-text"><small class="text-muted">Click to make.</small></p>
                  <div class="row">
                     <div class="col-6">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Select
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/ecommerce/insertion_make.html">Make</a></li>                       
                      </div> 
                     </div>
                  </div>            
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3" style="max-width: 660px; top: 20px">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="./images/storage_pro.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body" style="height: 220px">
                  <h5 class="card-title">Product-Storage</h5>
                  <p class="card-text" style="height:72px">You can see the location of products.</p>
                  <p class="card-text"><small class="text-muted">Click to see.</small></p>
                  <div class="row">
                     <div class="col-6">
                      <div class="dropend">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Product-Storage list
                      </button>
                      <ul class="dropdown-menu" style="background-color: grey">
                        <div class="container" >
                       <?php     
                           include "tables/prosto_table.php";
                        ?>
                        </div>
                       </ul>
                      </div> 
                     </div>
                  </div>       
                </div>
              </div>
            </div>
          </div>
          </div>
          </div>
        </div>
      </div> 
    </body>   