<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet"> <link href="https://fonts.googleapis.com/css?family=Catamaran&display=swap" rel="stylesheet">
  <link href="{{ asset('css/fr.css') }}" rel="stylesheet">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
       <a class="navbar-brand" href="http://localhost/BusTicket/laravel/public/orders">
      <img src="{{ asset('img/onlinbus.jpg') }}" alt="ONLINEBUS" style="height:40px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="http://localhost/BusTicket/laravel/public/orders" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Cars</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
   
     <section class="ftco-section ftco-no-pt bg-light" style="padding-top: 258px;">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-12 featured-top">
            <div class="row no-gutters">
              <div class="col-md-8 d-flex align-items-center">
        <div class="card" style="width: 50rem;" >

<div class="card-header">
<h5><strong>Complete your order</strong></h5>
</div>
    <!--Card content-->
    <!-- <div class="card-body px-lg-100 pt-50"> -->
      <div class="card-body">

        <!-- Form -->
  <form action="" method="POST">
      {{csrf_field()}}
     
  <div>
    <h5>Personal Detail</h5>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <input type="text" class="form-control" name="name" placeholder="Enter Full name">
    </div>
    <div class="form-group col-md-4">
      <input type="email" class="form-control" name="email" placeholder="Enter E-mail address">
    </div>
     <div class="form-group col-md-4">
      <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
    </div>
  </div>
  <h5>Flight Details</h5>
  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="flight_name" placeholder="Flight name">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="flight_no" placeholder="Flight Number">
    </div>
  </div>
    <h5>Personal message</h5>
<div class="form-group">
<textarea class="form-control" name="message" rows="5"></textarea>
  </div>
  <div class="form-group col-md-3">
    <button type="submit" class="btn btn-sm btn-success">Complete order</button>
  </div>
  </form>
 </div>
  </div>
              </div>
              <div class="col-sm-4" style="padding-left: 15px;">
                <div class="card">
                  <div class="card-header"><h5>Order details</h5></div>
                  <div class="card-body">
                    <table class="table table-condensed table-striped">
                      <tbody>
                        <tr>
                          <th>Pick up</th>
                          <td>Raleigh-Durham International Airport (RDU)</td>
                        </tr>
                        <tr>
                          <th>Drop Off</th>
                          <td></td>
                        </tr>
                        <tr>
                          <th>Pick up date & Time</th>
                          <td></td>
                        </tr>
                        <tr>
                          <th>Costs</th>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>







</body>
</html>
            
