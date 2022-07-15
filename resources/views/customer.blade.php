
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
    
    
    .sidenav {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #111;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }
    
    .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
      transition: 0.3s;
    }
    
    .sidenav a:hover {
      color: #f1f1f1;
    }
    
    .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }
    
    #main {
      transition: margin-left .5s;
      padding: 16px;
    }
    
    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }
    </style>
  <body>

    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    
     
      <a href="{{url('/customer/view')}}">User-list</a>

    </div>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
  
    <form  action="{{url('/')}}/customer" method="post">
      @csrf
      <div id="main">
    <div class=" container">
      <a class="btn btn-primary" href="{{url('/')}}" role="button">Back</a>
      <h1 class="text-center">Registration</h1>
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{old('name')}}">
        <span class="text-danger">
          @error('name')
           {{$message}}
           @enderror
        </span>
     
      </div>
      <div class="form-group">
        <label for="">email</label>
        <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{old('email')}}" >
        <span class="text-danger">
          @error('email')
          {{$message}}
           @enderror
        </span>
      </div>
      
      
       
      <div class="form-group">
        <label for="">address</label>
        <input type="text" name="address" id="" class="form-control" placeholder="" aria-describedby="helpId" >
        <span class="text-danger">
          @error('address')
          {{$message}}
           @enderror
        </span>
      </div>
      <label for="">Gender</label>
      <div class="form-check">
        
        <input type="radio" class="form-check-input" id="radio1" name="gender" value="Male" checked>Male
        <label class="form-check-label" for="radio1"></label>
      </div>
      <div class="form-check">
        <input type="radio" class="form-check-input" id="radio2" name="gender" value="Female">Female
        <label class="form-check-label" for="radio2"></label>
      </div>
      <div class="form-check">
        <input type="radio" class="form-check-input" id="radio3" name="gender" value="other">other
        <label class="form-check-label" for="radio3"></label>
      </div>
      <div class="form-group">
        <label for="">phone</label>
        <input type="number" name="phone" id="" class="form-control" placeholder="" aria-describedby="helpId" >
        <span class="text-danger">
          @error('phone')
          {{$message}}
           @enderror
        </span>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      
    </div>
      </div>
  </form>
  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
    }
    </script>
   
  </body>
</html>

