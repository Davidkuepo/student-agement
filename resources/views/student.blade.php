<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student system management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>
   @include('navbar')
    
   
   <div class="row header-container justify-content-center">
     <div class="header"> 
      <h1>Student Management System</h1>
    </div>

   </div>


  @if($layout=='index')
        <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
          <div class="row justify-content-center">
            <section class="col-md-7">
              @include("studentslist")
            </section>
          </div>
        </div>
        </div>


   @elseif($layout=='create')
   <div class="container-fluid mt-4">
    <div class="row">
         <section class="col">
         @include("studentslist")
         </section>
         <section class="col-md-5">
         
         <div class="card mb-3">
  <img src="https://previews.123rf.com/images/kadettmann/kadettmann2003/kadettmann200300079/141987081-african-american-female-computer-science-student-with-group-of-students.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Enter the informations of the new students</h5>
      
    <form action="{{url('/store')}}" method="post">
          @csrf
  <div class="form-group">
    <label>CNE</label>
    <input type="text" class="form-control" 
     name="cne" 
    placeholder="Enter cne">
  </div>
  <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" 
     name="firstName" 
    placeholder="Enter  the first name">
  </div>
  <div class="form-group">
    <label>Second Name</label>
    <input type="text" class="form-control" 
     name="secondName" 
    placeholder="Enter the second name">
  </div>
  <div class="form-group">
    <label>Age</label>
    <input type="text" class="form-control" 
     name="age" 
    placeholder="Enter the age">
  </div>
  <div class="form-group">
    <label>Speciality</label>
    <input type="text" class="form-control" 
     name="speciality" 
    placeholder="Enter the speciality">
  </div><br>
  <input type="submit" class="btn btn-info" value="Save">
  <input type="reset" class="btn btn-warning" value="Reset">
</form>

  </div>
</div>
        
         </section>
     </div>
        </div>
   @elseif($layout=='show')
   <div class="container-fluid mt-4">
    <div class="row">
         <section class="col">
         @include("studentslist")
         </section>
         <section class="col"></section>
       </div>
        </div>
   @elseif($layout == 'edit')
   <div class="container-fluid mt-4">
    <div class="row">
         <section class="col-md-7">
         @include("studentslist")
         </section>
         <section class="col-md-5">
         
         <div class="card mb-3">
  <img src="https://previews.123rf.com/images/kadettmann/kadettmann2003/kadettmann200300079/141987081-african-american-female-computer-science-student-with-group-of-students.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Update informations of student</h5>
    <form action="{{url('/update/'.$student->id)}}" method="post">
          @csrf
  <div class="form-group">
    <label>CNE</label>
    <input type="text" class="form-control" 
    value="{{$student->cne}}"
     name="cne" 
    placeholder="Enter cne">
  </div>
  <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" 
    value="{{$student->firstName}}"
     name="firstName" 
    placeholder="Enter  the first name">
  </div>
  <div class="form-group">
    <label>Second Name</label>
    <input type="text" class="form-control" 
    value="{{$student->secondName}}"
     name="secondName" 
    placeholder="Enter the second name">
  </div>
  <div class="form-group">
    <label>Age</label>
    <input type="text" class="form-control" 
    value="{{$student->age}}"
     name="age" 
    placeholder="Enter the age">
  </div>
  <div class="form-group">
    <label>Speciality</label>
    <input type="text" class="form-control" 
    value="{{$student->speciality}}"
     name="speciality" 
    placeholder="Enter the speciality">
  </div><br>
  <input type="submit" class="btn btn-info" value="Update">
  <input type="reset" class="btn btn-warning" value="Reset">
</form>


  </div>
</div>
         </section>
       </div>
        </div>
   @endif
   
   <footer></footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>