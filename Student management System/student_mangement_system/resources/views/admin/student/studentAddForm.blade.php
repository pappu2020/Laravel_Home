@extends('layouts.addOfficerDashboard')


@section('content')
    <div class="row">
        
            <h4>Student Registration</h4>

            <form action="" method="post" enctype="multipart/form-data">
                @csrf


                <div class="row">
                    <div class="col-lg-2 mb-2 mt-3">

                        
                        <select class="form-select form-control" name="class" id="classId">

                            <option selected >===Select the class===</option>
                            <option  value="6">Class 6</option>
                            <option  value="7">Class 7</option>
                            <option  value="8">Class 8</option>
                            <option  value="9">Class 9</option>
                            <option  value="10">Class 10</option>

                        </select>


                    </div>

                    <div class="col-lg-2 mb-2 mt-3">

                        
                        <select class="form-select form-control" name="courses">

                            <option selected >===Select the Course===</option>
                           
                            

                        </select>


                    </div>

                    
                </div>

                <button type="submit" class="btn btn-info">Submit</button>



            </form>
        
    </div>
@endsection


@section('javascriptSection')


<script>
 $("#classId").change(function(){
   alert("pappu");
 });

 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
    
@endsection
