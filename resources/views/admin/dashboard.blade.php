@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-12 col-lg-12">
      <div class="card">
        <div class="card-header">Recent Orders Table
         <div class="card-action">
            <div class="dropdown">
            <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
             <i class="icon-options"></i>
            </a>
             <div class="dropdown-menu dropdown-menu-right">
             <a class="dropdown-item" href="javascript:void();">Action</a>
             <a class="dropdown-item" href="javascript:void();">Another action</a>
             <a class="dropdown-item" href="javascript:void();">Something else here</a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="javascript:void();">Separated link</a>
              </div>
             </div>
            </div>
        </div>
          <div class="table-responsive">
                <table class="table align-items-center table-flush table-borderless">
                 <thead>
                  <tr>
                    <th>From</th>
                    <th>To</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                @forelse ($exchanges as $exchange)
                <tr>
                    <td>{{ $exchange->payment_method_from->name }}</td>
                    <td>{{ $exchange->payment_method_to->name }}</td>
                    <td>{{ $exchange->amount }}</td>
                    <td>{{ $exchange->date }}</td>
                    <td>{{ $exchange->status->name }}</td>
                </tr>
                     
                @empty
                    @include('admin.includes.no_data_found')
                @endforelse

                </tbody></table>
              </div>
      </div>
    </div>
   </div><!--End Row-->

@endsection