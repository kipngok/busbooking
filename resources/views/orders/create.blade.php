@extends('layouts.order')
@section('content')
     <section class="ftco-section ftco-no-pt bg-light">
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
  <form action="{{url('/')}}/orderComplete/{{$order->id}}" method="POST">
      {{csrf_field()}}
      <input type="hidden" name="order_id" value="{{$order->id}}">
      <input type="hidden" name="cost" value="{{$order->destination->fare}}">
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
                          <td>{{$order->destination->name}}</td>
                        </tr>
                        <tr>
                          <th>Pick up date & Time</th>
                          <td>{{date_format(date_create($order->date.' '.$order->time),'dS M Y h:i:sa')}}</td>
                        </tr>
                        <tr>
                          <th>Costs</th>
                          <td>{{$order->destination->fare}}</td>
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

     @endsection
