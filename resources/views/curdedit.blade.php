<!DOCTYPE html>
<html lang="en">

<head>
    <title>CURD APP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <br><br><br>
    <!--page container start-->

    <div class="container" style="width: 850px; float: center; width: 900px; float: center; border-radius: 8px;  background: rgba(46, 51, 56, 0.2)!important;"><br><br>
        <h3 align="center">SIMPLE CURD APP</h3><br>
        <h5 align="center">Update Data!</h5><br>

        <!--Employee Data form Start -->
        <form method="POST" action="">
            @csrf
            @method('PUT')
            <div class="row ">
                <div class="col-sm-3">
                    <input type="text" id="name" value="{{$emp_details->name}}" name="name" class="form-control" placeholder="Full Name" required>
                </div>
                <div class="col-sm-3">
                    <input type="text" id="address" value="{{$emp_details->address}}" name="address" class="form-control" placeholder="Address" required>
                </div>
                <div class="col-sm-3">
                    <input type="text" id="phone" value="{{$emp_details->phone}}" name="phone" class="form-control" placeholder="Phone" required>
                </div>
                <div class="col-sm-3">
                    <input type="text" id="email" value="{{$emp_details->email}}" name="email" class="form-control" placeholder="Email" required>
                </div>
            </div><br>
            <div class="row ">
                <div class="col-sm-3">
                    <select class="form-select" id="job_description" name="job_description" aria-label="Default select example" required>
                        <option selected>{{$emp_details->job_description}}</option>
                        <option value="Programmer">Programmer</option>
                        <option value="Designer">Designer</option>
                        <option value="Project Manager">Project Manager</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <input type="text" id="salary" value="{{$emp_details->salary}}" name="salary" class="form-control" placeholder="Salary">
                </div>

                <div class="col-sm-3">
                    <input type="submit" name="Submit" value="Update" class="btn btn-primary ">
                    <a class="btn btn-primary" href="/">Cancel</a>
                </div>

                <!--Success Message-->
                @if(session()->has('status'))
                <div class="col-sm-3 alert alert-success">
                    {{session('status')}}
                </div>
                @endif
            </div>
            <br><br><br><br>
        </form>
        <!--Employee Data form end -->
    </div>
    <!--page container end-->

</body>

</html>
<style>
    body {
        background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
        height: 100vh;
    }

    input::placeholder {

        color: red;
    }

    .table {
        color: white;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
</script>