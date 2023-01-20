@extends('layouts.userDashboard')


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">

                <div class="card-body">
                    <h4 class="card-title">Order List</h4>
                    <div class="myOrderTable">
                        <form action="{{ route('statusChange') }}" method="post">
                            @csrf
                            <table class="table table-striped">
                                <thead>
                                    <tr class="fw-bold">
                                        <th scope="col">#</th>
                                        <th scope="col">Order Date</th>
                                        <th scope="col">Order Id</th>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Sub-total</th>
                                        <th scope="col">Discount</th>
                                        <th scope="col">Delivery Charge</th>
                                        <th scope="col">Total Amount</th>
                                        <th scope="col">Payemnt Method</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($allorderList as $key => $orderList)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $orderList->created_at->format('d-m-Y') }}</td>
                                            <td>{{ $orderList->order_id }}</td>
                                            <td>{{ $orderList->rel_to_customer->name }}</td>

                                            <td>{{ $orderList->sub_total }}</td>
                                            <td>{{ $orderList->Discount }}</td>
                                            <td>{{ $orderList->Delivery_charge }}</td>
                                            <td>{{ $orderList->Total_amount }}</td>
                                            <td>

                                                @php
                                                    if ($orderList->payment_method == 1) {
                                                        echo 'Cash On Delivery';
                                                    } elseif ($orderList->payment_method == 2) {
                                                        echo 'SSL';
                                                    } else {
                                                        echo 'Stripe';
                                                    }
                                                @endphp


                                            </td>
                                            <td>

                                                @php
                                                    $satusMessgae = '';
                                                    if ($orderList->status == 0) {
                                                        $satusMessgae = 'Order is placed';
                                                    } elseif ($orderList->status == 1) {
                                                        $satusMessgae = 'Package being prepared';
                                                    } elseif ($orderList->status == 2) {
                                                        $satusMessgae = 'Reached logistics facility';
                                                    } elseif ($orderList->status == 3) {
                                                        $satusMessgae = 'Reached our warehouse';
                                                    } elseif ($orderList->status == 4) {
                                                        $satusMessgae = 'Shiped';
                                                    } elseif ($orderList->status == 5) {
                                                        $satusMessgae = 'Out for delivery';
                                                    } else {
                                                        $satusMessgae = 'Deliverd';
                                                    }
                                                    
                                                @endphp

                                                <span
                                                    class="badge rounded-pill 
                                          
                                          @if ($orderList->status == 0) 
                                          
                                          bg-info

                                          @elseif ($orderList->status == 1)
                                           bg-primary
                                           
                                            @elseif ($orderList->status == 2)
                                           bg-secondary  

                                            @elseif ($orderList->status == 3)
                                           bg-warning  

                                            @elseif ($orderList->status == 4)
                                           bg-dark 
                                           
                                           
                                           @elseif ($orderList->status == 5)
                                           bg-warning
                                           
                                           @else
                                           bg-success
                                           
                                           
                                           
                                           @endif 
                                          
                                          
                                          text-light">{{ $satusMessgae }}</span>



                                            </td>
                                            <td>



                                                <button type="button" class="btn btn-success light sharp"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24"
                                                                height="24"></rect>
                                                            <circle fill="#000000" cx="5" cy="12"
                                                                r="2"></circle>
                                                            <circle fill="#000000" cx="12" cy="12"
                                                                r="2"></circle>
                                                            <circle fill="#000000" cx="19" cy="12"
                                                                r="2"></circle>
                                                        </g>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu" x-placement="bottom-start"
                                                    style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
                                                    <button value="{{ $orderList->id . ',' . '0' }}" type="submit"
                                                        name="stutusButton" class="dropdown-item btn-primary">Order is
                                                        placed</button>
                                                    <button value="{{ $orderList->id . ',' . '1' }}" type="submit"
                                                        name="stutusButton" class="dropdown-item btn-primary">Package being
                                                        prepared</button>
                                                    <button value="{{ $orderList->id . ',' . '2' }}" type="submit"
                                                        name="stutusButton" class="dropdown-item btn-primary">Reached
                                                        logistics facility</button>
                                                    <button value="{{ $orderList->id . ',' . '3' }}" type="submit"
                                                        name="stutusButton" class="dropdown-item btn-primary">Reached our
                                                        warehouse</button>
                                                    <button value="{{ $orderList->id . ',' . '4' }}" type="submit"
                                                        name="stutusButton"
                                                        class="dropdown-item btn-primary">Shiped</button>
                                                    <button value="{{ $orderList->id . ',' . '5' }}" type="submit"
                                                        name="stutusButton" class="dropdown-item btn-primary">Out for
                                                        delivery</button>
                                                    <button value="{{ $orderList->id . ',' . '6' }}" type="submit"
                                                        name="stutusButton"
                                                        class="dropdown-item btn-primary">Deliverd</button>


                                                </div>

                                            </td>

                                        </tr>
                                    @endforeach

                            </table>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
