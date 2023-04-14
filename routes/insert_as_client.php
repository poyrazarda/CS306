<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<?php
session_start();
?>
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
            <li><a class="dropdown-item" href="insert_as_admin.php">Send a message to admin</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="adminlist.php">See messages coming from admin</a></li>           
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container" style="height: 10px"></div>
<div class="container" style="height: 80px">
<div class="container" style="height: 15px"></div>
<?php
if(isset($_SESSION['status']))
{
    echo "<div class='card'>";
    echo "<div class='card-body'>";
    echo $_SESSION['status'];
    echo "</div>";
    echo "</div>";
    unset($_SESSION['status']);

}
?>
<div class="container" style="height: 15px"></div>
<div class="container" style="height: 80px">
   <div>
      <h2 style="text-align: center">
        Send a message as client
      </h2>
      <hr class="border border-primary border2 opacity-75" style="border-color:blueviolet; background-color: red">
   </div>
</div>
<div class="row">
    <div class="container center" style="width: 400px">
        <form action="insertclient.php" method="POST">
            <div class="mb-3">
              <label for="clientmessage" class="form-label">Your message</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" name="message_client" rows="3"></textarea>
              <div id="idHelp" class="form-text">Type your message here.</div>
            </div>
            <button type="submit" name = "submission" value="Submit" class="btn btn-primary">Send</button>
          </form>      
    </div>
</div>