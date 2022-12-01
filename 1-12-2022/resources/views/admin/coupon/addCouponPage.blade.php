@extends('layouts.userDashboard')


@section('content')
    <div class="caontainer-fluid">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Coupon List</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Discount Amount</th>
                                    <th scope="col">Validity</th>
                                   
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>


                              
                                    
                                @foreach ($allcouponInfo as $key=> $couponInfo)
                                    
                                
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$couponInfo -> couponCode}}</td>
                                    <td>{{($couponInfo -> couponType == 1?"Percentage":"Solid")}}</td>
                                    <td>{{$couponInfo -> couponDiscount}}</td>
                                    
                                    <td><span class="badge bg-primary text-light">{{Carbon\Carbon::now()->diffInDays($couponInfo ->couponValidity,false)}} days remaining</span></td>
                                    <td>{{$couponInfo -> created_at}}</td>
                                    <td>
                                        
                                        <a href="" class="btn btn-danger">Delete</a>
                                        
                                    
                                    
                                    </td>
                                </tr>

                                @endforeach

                               
                               
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>


            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Coupon</h5>
                        <form action="{{route("couponInsert")}}" method="post">
                            @csrf
                            <div class="mb-3 mt-3">
                                <label for="couponCode" class="form-label">Coupon Code</label>
                                <input type="text" class="form-control border border-dark" name="couponCode">

                            </div>

                            @error('couponCode')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 

                             <div class="mb-3 mt-3">
                            <select name="couponType" class="form-control border border-dark">
                                <option value="">==Select the coupon type==</option>
                                <option value="1">Percentage</option>
                                <option value="2">Solid amount</option>
                            </select>

                            </div>

                            @error('couponType')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 


                            <div class="mb-3 mt-3">
                                <label for="couponDiscount" class="form-label">Discount Amount</label>
                                <input type="number" class="form-control border border-dark" name="couponDiscount">

                            </div>

                            @error('couponDiscount')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 

                             <div class="mb-3 mt-3">
                                <label for="couponValidity" class="form-label">Validity</label>
                                <input type="date" class="form-control border border-dark" name="couponValidity">

                            </div>

                            @error('couponValidity')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror 

                            <button class="btn btn-info mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
