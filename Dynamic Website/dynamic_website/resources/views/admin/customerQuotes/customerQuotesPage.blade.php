@extends('layouts.dashboard')


@section('content')

<div class="caontainer-fluid">
    <div class="row">
        <div class="col-lg-8">

        </div>


        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add Customer Quotes Content</h5>
                    <form action="" method="podt">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection