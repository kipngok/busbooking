@extends('layouts.order')
@section('content')
     <section class="ftco-section ftco-no-pt bg-light">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-12 featured-top">
            <div class="row no-gutters">
              <div class="col-sm-6" style="padding-left: 15px; margin: auto;">
                <div class="card">
                  <div class="card-header"><h5>Order details</h5></div>
                  <div class="card-body">
                  	<div class="alert alert-success">
                  		<p>Your order was processed succesfully. Please check your email for details. We shall contact you to confirm.</p>
                  	</div>
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
