
@extends('layouts.app')

@section('content')
<div class="filters" style="padding:20px;">
<h5 style="font-weight: 600;"><i class="fa fa-bus"></i>Destinations</h5>
</div>
 <div class="col-sm-6" style="padding-left: 15px;">
 <div class="card-body">
                    <table class="table table-condensed table-striped">
                      <tbody>
                        <tr>
                            
                          <th>From</th>
                          <td>{{$destinations->from}}</td>
                        </tr>
                        <tr>
                          <th>To</th>
                          <td>{{$destinations->to}}</td>
                        </tr>
                        <tr>
                          <th>Time</th>
                          <td>{{$destinations->time}}</td>
                        </tr>
                        <tr>
                          <th>Distance</th>
                          <td>{{$destinations->distance}}</td>
                        </tr>
                        <tr>
                          <th>Cost</th>
                          <td>{{$destinations->fare}}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
              </div>
@endsection
