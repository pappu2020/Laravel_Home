@extends("layouts.addOfficerDashboard")


@section('content')

<div class="mainSectionContainer">
    <h4 class="employeeHeading fw-bold fs-3">Admission Officer's Operation</h4>



    <div class="row employeeManagementDiv">


        <a href="{{route("studentAddForm")}}" class="col-lg-2 text-decoration-none employeesDiv">
            <div class="employeeManagement">

                <p class="employeePara ms-4">Students ADD</p>


            </div>
        </a>

      

        <a href="" class="col-lg-2 text-decoration-none employeesDiv">
            <div class="employeeManagement">

                <p class="employeePara ms-4">Students List</p>

            </div>
        </a>
        <a href="" class="col-lg-2 text-decoration-none employeesDiv">
            <div class="employeeManagement">

                <p class="employeePara">Student Remove</p>

            </div>
        </a>


         <a href="#" class="col-lg-2 text-decoration-none employeesDiv">
            <div class="employeeManagement">

                <p class="employeePara">Student Scholership</p>

            </div>
        </a>

        <a href="#" class="col-lg-2 text-decoration-none employeesDiv">
            <div class="employeeManagement">

                <p class="employeePara">Student Gurdian Info</p>
                <p class="employeePara2">List</p>

            </div>
        </a>
        <a href="#" class="col-lg-2 text-decoration-none employeesDiv mt-4">
            <div class="employeeManagement ms-2">

                <p class="employeePara">Messages</p>

            </div>
        </a>

        <a href="#" class="col-lg-2 text-decoration-none employeesDiv mt-4">
            <div class="employeeManagement">

                <p class="employeePara ms-2">Contact Admin</p>

            </div>
        </a>

    </div>
</div>
    
@endsection