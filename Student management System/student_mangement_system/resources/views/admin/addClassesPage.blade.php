@extends('layouts.adminDashboard')


@section('content')
    <div class="row">
        <div class="col-lg-8">

        </div>


        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Add Classes</h3>


                    <form action="{{route("classInsert")}}" method="post">
                        @csrf
                        <div class="mb-2 mt-3">


                            <select class="form-select form-control" name="class">

                                <option selected>===Select the class===</option>
                                <option value="6">Class 6</option>
                                <option value="7">Class 7</option>
                                <option value="8">Class 8</option>
                                <option value="9">Class 9</option>
                                <option value="10">Class 10</option>

                            </select>


                        </div>

                        <div class="mb-2 mt-3">

                            <label for="course" class="form-label">Coureses</label>
                            <input type="text" class="form-control  @error('course') is-invalid @enderror" name="course"
                                placeholder="Enter the Course">

                        </div>

                        @error("course")
                           <p class="text-danger">{{$message}}</p> 
                        @enderror

                    

                    <button class="btn btn-info mt-3" type="submit">SUbmit</button>
                </div>

                </form>

                @if (session("insertSuccess"))

                <div class="alert alert-success">{{session("insertSuccess")}}</div>
                    
                @endif
            </div>
        </div>
    </div>
@endsection
