@extends('layouts.dashboard')


@section('content')
    <div class="caontainer-fluid">
        <div class="row">
          

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Content List</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($allContactList as $key => $ContactList)
                                    
                               
                                <tr>
                                    <th scope="row">{{$key +1}}</th>
                                    <td>{{$ContactList -> contactFormName}}</td>
                                    <td>{{$ContactList -> contactFormEmail}}</td>
                                    <td>{{$ContactList -> contactFormMsg}}</td>
                                    <td>{{$ContactList -> created_at -> diffForHumans()}}</td>
                                    
                                </tr>
                                 @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
