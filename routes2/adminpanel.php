
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
            <li><a class="dropdown-item" href="insert_as_admin.php">Send a message to client</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="clientlist.php">See messages coming from client</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="allmessages.php">See all messages</a></li>
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
        <h1 style="text-align: center">E-Commerce Admin Panel</h1>
        <hr class="border border-primary border2 opacity-75" style="border-color:blueviolet; background-color: red">
      <div class="row">
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
                  <p class="card-text">You can insert new products, delete products from the existing table and filter products according to your filtering choices.</p>
                  <p class="card-text"><small class="text-muted">Select from the menu below</small></p>
                  <div class="row">
                     <div class="col-6">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Select
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/ecommerce/insertion_prod.html">Insert</a></li>                       
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/ecommerce/deletion_prod_select.php">Delete</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/ecommerce/filter_product2.html">Filter</a></li>
                      </ul>
                      </div> 
                     </div>
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
                <img src="./images/seller.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body" style="height: 220px">
                  <h5 class="card-title">Sellers</h5>
                  <p class="card-text" style="height:72px">You can insert new sellers, delete sellers from the existing table and filter sellers according to your filtering choices.</p>
                  <p class="card-text"><small class="text-muted">Select from the menu below</small></p>
                  <div class="row">
                     <div class="col-6">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Select
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/ecommerce/insertion_seller.html">Insert</a></li>                       
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/ecommerce/deletion_seller_select.php">Delete</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/ecommerce/filter_seller_choice.html">Filter</a></li>
                      </ul>
                      </div> 
                     </div>
                     <div class="col-6">
                      <div class="dropend">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Seller list
                      </button>
                      <ul class="dropdown-menu" style="background-color: grey">
                        <div class="container" >
                       <?php     
                           include "tables/seller_table.php";
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
                <img src="./images/customer.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body" style="height: 220px">
                  <h5 class="card-title">Customers</h5>
                  <p class="card-text">You can insert new customers, delete customers from the existing table and filter customers according to your filtering choices.</p>
                  <p class="card-text"><small class="text-muted">Select from the menu below</small></p>
                  <div class="row">
                     <div class="col-6">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Select
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/ecommerce/insertion_customer.html">Insert</a></li>                       
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/ecommerce/deletion_customer_select.php">Delete</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/ecommerce/filter_customer_choice.html">Filter</a></li>
                      </ul>
                      </div> 
                     </div>
                     <div class="col-6">
                      <div class="dropend">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Customer list
                      </button>
                      <ul class="dropdown-menu" style="background-color: grey">
                        <div class="container" >
                       <?php     
                           include "tables/customer_table.php";
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
                <img src="./images/support.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body" style="height: 220px">
                  <h5 class="card-title">Tickets</h5>
                  <p class="card-text" style="height:72px">You can insert new tickets, delete tickets from the existing table and filter tickets according to your filtering choices.</p>
                  <p class="card-text"><small class="text-muted">Select from the menu below</small></p>
                  <div class="row">
                     <div class="col-6">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Select
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/ecommerce/insertion_ticket.html">Insert</a></li>                       
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/ecommerce/deletion_ticket_select.php">Delete</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/ecommerce/filter_ticket_choice.html">Filter</a></li>
                      </ul>
                      </div> 
                     </div>
                     <div class="col-6">
                      <div class="dropend">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ticket list
                      </button>
                      <ul class="dropdown-menu" style="background-color: grey">
                        <div class="container" >
                       <?php     
                           include "tables/ticket_table.php";
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
        <div class="col">
          <div class="container center">
            <div class="card mb-3" style="max-width: 660px; top: 20px">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="./images/supplier.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body" style="height: 220px">
                    <h5 class="card-title">Suppliers</h5>
                    <p class="card-text">You can insert new suppliers, delete supplier from the existing table and filter suppliers according to your filtering choices.</p>
                    <p class="card-text"><small class="text-muted">Select from the menu below</small></p>
                    <div class="row">
                     <div class="col-6">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Select
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/ecommerce/insertion_supplier.html">Insert</a></li>                       
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/ecommerce/deletion_supp_select.php">Delete</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/ecommerce/filter_supp_choice.html">Filter</a></li>
                      </ul>
                      </div> 
                     </div>
                     <div class="col-6">
                      <div class="dropstart">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Supplier list
                      </button>
                      <ul class="dropdown-menu" style="background-color: grey">
                        <div class="container" >
                       <?php     
                           include "tables/supplier_table.php";
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
                  <img src="./images/courier.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body" style="height: 220px">
                    <h5 class="card-title">Shippers</h5>
                    <p class="card-text">You can insert new shippers, delete shippers from the existing table and filter shippers according to your filtering choices.</p>
                    <p class="card-text"><small class="text-muted">Select from the menu below</small></p>
                    <div class="row">
                     <div class="col-6">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Select
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/ecommerce/insertion_shipper.html">Insert</a></li>                       
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/ecommerce/deletion_ship_select.php">Delete</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/ecommerce/filter_ship_choice.html">Filter</a></li>
                      </ul>
                      </div> 
                     </div>
                     <div class="col-6">
                      <div class="dropstart">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Shipper list
                      </button>
                      <ul class="dropdown-menu" style="background-color: grey">
                        <div class="container" >
                       <?php     
                           include "tables/shipper_table.php";
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
                  <img src="./images/payment.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body" style="height: 220px">
                    <h5 class="card-title">Payments</h5>
                    <p class="card-text">You can insert new payment method, delete payment methods from the existing table and filter payment methods according to your filtering choices.</p>
                    <p class="card-text"><small class="text-muted">Select from the menu below</small></p>
                    <div class="row">
                     <div class="col-6">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Select
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/ecommerce/insertion_pay.html">Insert</a></li>                       
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/ecommerce/deletion_pay_select.php">Delete</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/ecommerce/filter_pay_choice.html">Filter</a></li>
                      </ul>
                      </div> 
                     </div>
                     <div class="col-6">
                      <div class="dropstart">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Payment list
                      </button>
                      <ul class="dropdown-menu" style="background-color: grey">
                        <div class="container" >
                       <?php     
                           include "tables/payment_table.php";
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
                  <img src="./images/storage.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body" style="height: 220px">
                    <h5 class="card-title">Storage</h5>
                    <p class="card-text">You can insert new storage, delete storage from the existing table and filter storage according to your filtering choices.</p>
                    <p class="card-text"><small class="text-muted">Select from the menu below</small></p>
                    <div class="row">
                     <div class="col-6">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Select
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/ecommerce/insertion_storage.html">Insert</a></li>                       
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/ecommerce/deletion_storage_select.php">Delete</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/ecommerce/filter_sto_choice.html">Filter</a></li>
                      </ul>
                      </div> 
                     </div>
                     <div class="col-6">
                      <div class="dropstart">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Storage list
                      </button>
                      <ul class="dropdown-menu" style="background-color: grey">
                        <div class="container" >
                       <?php     
                           include "tables/storage_table.php";
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
      <hr class="border border-primary border2 opacity-75" style="border-color:blueviolet; background-color: red">
      <div class="container" style="text-align: center">
      <h2>Customer Panel Operations</h2>
      </div>
      <hr class="border border-primary border2 opacity-75" style="border-color:blueviolet; background-color: red">
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
                  <p class="card-text">You can insert new orders, delete orders from the existing table and filter orders according to your filtering choices.</p>
                  <p class="card-text"><small class="text-muted">Select from the menu below</small></p>
                  <div class="row">
                     <div class="col-6">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Select
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/ecommerce/insertion_order.html">Insert</a></li>                       
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/ecommerce/deletion_order_select.php">Delete</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/ecommerce/filter_order_choice.html">Filter</a></li>
                      </ul>
                      </div> 
                     </div>
                     <div class="col-6">
                      <div class="dropend">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Orders list
                      </button>
                      <ul class="dropdown-menu" style="background-color: grey">
                        <div class="container" >
                       <?php     
                           include "tables/orders_table.php";
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
                <img src="./images/tic_sup.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body" style="height: 220px">
                  <h5 class="card-title">Ticket Messages</h5>
                  <p class="card-text" style="height:72px">You can insert new ticket message, delete ticket message from the existing table and filter ticket messages according to your filtering choices.</p>
                  <p class="card-text"><small class="text-muted">Select from the menu below</small></p>
                  <div class="row">
                     <div class="col-6">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Select
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/ecommerce/insertion_ticket_cus.html">Insert</a></li>                       
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/ecommerce/deletion_ticket_cus_select.php">Delete</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/ecommerce/filter_tc_choice.html">Filter</a></li>
                      </ul>
                      </div> 
                     </div>
                     <div class="col-6">
                      <div class="dropend">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ticket list
                      </button>
                      <ul class="dropdown-menu" style="background-color: grey">
                        <div class="container" >
                       <?php     
                           include "tables/ticket_cus_table.php";
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
        <div class="col">
          <div class="container center">
          <div class="card mb-3" style="max-width: 660px; top: 20px">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="./images/make_pay.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body" style="height: 220px">
                  <h5 class="card-title">Make Payment</h5>
                  <p class="card-text">You can make payment, delete payment from the existing table and filter payments according to your filtering choices.</p>
                  <p class="card-text"><small class="text-muted">Select from the menu below</small></p>
                  <div class="row">
                     <div class="col-6">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Select
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/ecommerce/insertion_make.html">Make</a></li>                       
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/ecommerce/deletion_make_select.php">Delete</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/ecommerce/filter_make_choice.html">Filter</a></li>
                      </ul>
                      </div> 
                     </div>
                     <div class="col-6">
                      <div class="dropend">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Payment list
                      </button>
                      <ul class="dropdown-menu" style="background-color: grey">
                        <div class="container" >
                       <?php     
                           include "tables/make_table.php";
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
                <img src="./images/storage_pro.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body" style="height: 220px">
                  <h5 class="card-title">Product-Storage</h5>
                  <p class="card-text" style="height:72px">You can put new products to new storages, put products away from the storages and filter products or storages according to your filtering choices.</p>
                  <p class="card-text"><small class="text-muted">Select from the menu below</small></p>
                  <div class="row">
                     <div class="col-6">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Select
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/ecommerce/insertion_prosto.html">Insert</a></li>                       
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/ecommerce/deletion_prosto_select.php">Delete</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/ecommerce/filter_seller_choice.html">Filter</a></li>
                      </ul>
                      </div> 
                     </div>
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

