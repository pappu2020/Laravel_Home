@extends('layouts.adminDashboard')


@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Teacher List</h3>

                    
                        <table class="table" id="teacherTableId">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Postion</th>
                                    <th scope="col">FatherName</th>
                                    <th scope="col">MotherName</th>
                                    <th scope="col">GurdianPhone</th>
                                    <th scope="col">Nationalid</th>
                                    <th scope="col">BirthRegNum</th>
                                    <th scope="col">Dob</th>
                                    <th scope="col">BloodGrp</th>
                                    <th scope="col">Religion</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">presentAddress</th>
                                    <th scope="col">parmanentAddress</th>
                                </tr>
                            </thead>
                            <tbody>



                                @foreach ($allTeacherInfo as $key => $TeacherInfo)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $TeacherInfo->name }}</td>
                                        <td>{{ $TeacherInfo->email }}</td>
                                        <td><img width="50px" height="50px"
                                                src="{{ asset('uploads/teacher/') }}/{{ $TeacherInfo->photo }}"
                                                alt=""></td>
                                        <td>{{ $TeacherInfo->postion }}</td>
                                        <td>{{ $TeacherInfo->fatherName }}</td>
                                        <td>{{ $TeacherInfo->motherName }}</td>
                                        <td>{{ $TeacherInfo->gurdianPhone }}</td>
                                        <td>{{ $TeacherInfo->nationalid }}</td>
                                        <td>{{ $TeacherInfo->birthRegNum }}</td>
                                        <td>{{ $TeacherInfo->dob }}</td>
                                        <td>{{ $TeacherInfo->bloodGrp }}</td>
                                        <td>{{ $TeacherInfo->religion }}</td>
                                        <td>{{ $TeacherInfo->Gender }}</td>
                                        <td>{{ $TeacherInfo->presentAddress }}</td>
                                        <td>{{ $TeacherInfo->parmanentAddress }}</td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    
                </div>
            </div>

        </div>
    </div>
@endsection

@section('javascript_admin_dashboard')
    <script>
        $(document).ready(function() {
            $('#teacherTableId').DataTable();
        });
    </script>
@endsection
