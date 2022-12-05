@extends('layouts.adminDashboard')


@section('content')
    <div class="row">
        <div class="col-lg-8">

        </div>


        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Add Classes</h3>


                    <form action="{{ route('classInsert') }}" method="post">
                        @csrf
                        <div class="mb-2 mt-3">


                            <div class="mb-2 mt-3">

                                <label for="course" class="form-label">Add Class</label>
                                <input type="text" class="form-control  @error('class') is-invalid @enderror"
                                    name="class" placeholder="Enter the Class">

                            </div>

                            @error('class')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror


                        </div>




                        <button class="btn btn-info mt-3" type="submit">SUbmit</button>
                </div>

                </form>

                @if (session('insertClassSuccess'))
                    <div class="alert alert-success">{{ session('insertClassSuccess') }}</div>
                @endif
            </div>


            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Add Subjects</h3>


                    <form action="{{ route('subjectInsert') }}" method="post">
                        @csrf
                        <div class="mb-2 mt-3">


                            <select class="form-select form-control" name="classNameForAddSubject">

                                <option selected>===Select the class===</option>
                                @foreach ($allclassList as $classList)
                                    <option value="{{ $classList->className }}">{{ $classList->className }}</option>
                                @endforeach

                            </select>


                        </div>

                        <div class="mb-2 mt-3">

                            <label for="course" class="form-label">Coureses</label>
                            <input type="text" class="form-control  @error('course') is-invalid @enderror" name="course"
                                placeholder="Enter the Course">

                        </div>

                        @error('course')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror


                        <div class="mb-2 mt-3">

                            <label for="course" class="form-label">Coureses Fees</label>
                            <input type="number" class="form-control  @error('courseFees') is-invalid @enderror" name="courseFees"
                                placeholder="Enter the Course Fess">

                        </div>

                        @error('courseFees')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror



                        <button class="btn btn-info mt-3" type="submit">SUbmit</button>
                </div>

                @if (session('insertClassSuccess'))
                    <div class="alert alert-success">{{ session('insertClassSuccess') }}</div>
                @endif

                </form>

                @if (session('insertSubSuccess'))
                    <div class="alert alert-success">{{ session('insertSubSuccess') }}</div>
                @endif
            </div>
        </div>
    </div>
@endsection
