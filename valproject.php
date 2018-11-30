<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="text.css">
<link rel="stylesheet" href="zoomhover.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sacramento">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style>
  body{
  background: linear-gradient(to top, #66ffcc 0%, #ffffcc 20%);
  }

  /*imcnt*/
  #contactimg{
    -webkit-animation: anim 4s infinite linear;
    animation: anim 4s infinite linear;
}

@-webkit-keyframes anim {
    from {-webkit-transform: rotateY(0deg);}
    to {-webkit-transform: rotateY(360deg);}
}

@keyframes anim {
    from {transform: rotateY(0deg);}
    to {transform: rotateY(360deg);}
}
  /*imcnt*/
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: auto;
  }
</style>
</head>
<body>
  <nav class="navbar navbar-expand-md bg-info  navbar-dark fixed-top" id="n">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><strong></strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse"
  data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <img src="https://images.onlinelabels.com/Images/Predesign/00000002/1613/Name-Tag-Circle-Labels.png"
  alt="Logo" style="width:85px;height:85px; margin-left:2px;">
  <!-- Links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#"><strong>Home</strong></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><strong>About Us</strong></a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       <strong>Events</strong>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#b">Birthday Parties</a>
        <a class="dropdown-item" href="#w">Weddings</a>
        <a class="dropdown-item" href="#o">Other Events</a>
      </div>
       <li class="nav-item">
      <a class="nav-link" href="#contactimg"><strong>Contact</strong></a>
    </li>
    </li>
  </ul>
</div>
</nav>
<br>

<br><br><br><br><br>
<div class="row">
  <div class="col-md-12">
<div id="demo" class="carousel slide carousel-fade" style="margin-left:35px;margin-right:35px;"
 class="car" data-ride="carousel" data-interval="2000">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="c1.jpg" alt="Los Angeles" width="1100" height="450">
      <div class="carousel-caption">
        <h4>Where flowers bloom,so does hope.</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="c3.jpg" alt="Chicago" width="1100" height="450">
      <div class="carousel-caption">
        <h4>Be a flower, not a weed.</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="c1.jpg" alt="New York" width="1100" height="450">
      <div class="carousel-caption">
        <h4>Flower blossoms for its own joy.</h4>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
</div>
<br><br><br>
<div class="row" style="margin-left:20px;margin-right:20px;">
<div class="col-md-4" id="w">
  <div class="card" style="width:100%;height:350px;">
    <!-- <h1 class="card-title" data-content="bubblegum" style="text-align:center;font-family: 'Sacramento', cursive;">Weddings</h1> -->
    <h2 class="card-title"  style="text-align:center;font-family:Times New Roman;color:blue;margin-bottom: -1.25rem;">Weddings</h2>
   <div class="cours2" style="overflow:hidden;">
       <img  class="hover" src="http://skazkakirov.ru/images/registry/2.jpg" style="width:100%;height:320px;border:1px solid transparent;transition:1s;">
         <div class="cours3">
           <!-- <h2 style="text-align:center;margin-top:-6px;color:white;">Weddings</h2> -->
             <h5 style="text-align:center;">When it comes to elegant deco designs,don't forget to</h5>
             <h5 style="text-align:center;">Contact us. We are just a call away.</h5>
         </div>
         <div class="cours4 text-center">
           <button class="cou" style="border:1px solid transparent;padding:10px 20px ;font-size:16px;border-radius:10%;background-color:rgb(237,78,110);color:white;">View More</button>
         </div>
     </div>
     </div><br><br>
   </div>
     <div class="col-md-4" id="b">
       <div class="card" style="width:100%;height:350px;">
         <h2 class="card-title"  style="text-align:center;font-family:Times New Roman;color:blue;margin-bottom: -1.25rem;">Birthday Parties</h2>
        <div class="cours2" style="overflow:hidden;">
            <img class="hover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrIbeX1l5pO5YoK4XjbaT_elTcGlCrqsywK5jWMwtfsOBo-RLRXQ" style="width:100%;height:320px;border:1px solid transparent;transition:1s;">
              <div class="cours3">
                <!-- <h2 style="text-align:center;margin-top:-6px;color:rgb(237,78,110);">Birthday Parties</h2> -->
                  <h5 style="text-align:center;">Birthday comes once a year</h5>
                  <h5 style="text-align:center;">Contact Us...We shall make it even more special</h5>
              </div>
              <div class="cours4 text-center">
                <button class="cou" style="border:1px solid transparent;padding:10px 20px ;font-size:16px;border-radius:10%;background-color:rgb(237,78,110);color:white;">View More</button>
              </div>
          </div>
          </div><br><br>
        </div><br>
          <div class="col-md-4" id="o">
            <div class="card" style="width:100%;height:350px;">
              <h2 class="card-title"  style="text-align:center;font-family:Times New Roman;color:blue;margin-bottom: -1.25rem;">Other Events</h2>
             <div class="cours2" style="overflow:hidden;">
                 <img class="hover" src="https://i.ytimg.com/vi/ihHWN_7bSpA/maxresdefault.jpg" style="width:100%;height:320px;border:1px solid transparent;transition:1s;">
                   <div class="cours3">
                     <!-- <h2 style="text-align:center;margin-top:-6px;color:rgb(237,78,110);">Other Events</h2> -->
                       <h5 style="text-align:center;">For any help when it comes to an  event,don't </h5>
                       <h5 style="text-align:center;"> hesitate to contact us.</h5>
                   </div>
                   <div class="cours4 text-center">
                     <button class="cou" style="border:1px solid transparent;padding:10px 20px ;font-size:16px;border-radius:10%;background-color:rgb(237,78,110);color:white;">View More</button>
                   </div>
               </div>
               </div><br><br>
             </div><br>
                 </div>
 </div>
</div>
<br>

<!-- Contact -->


<div class="container contact-form " style="width:95%;margin-left:18px;" >
            <div class="contact-image">
                <img src="contact-icon.png" style="width:24%;"
                id="contactimg" alt="rocket_contact"
                />
            </div>
            <form method="post">
                <h3>Contact us</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                            <input type="submit"  class="btn btn-success" style="margin-left: 50px;" value="Send Message" />
                        </div>
                </div>
            </form>
</div>

<!-- Contact -->
</body>
<script>
</script>
</html>
