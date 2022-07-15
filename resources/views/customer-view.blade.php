

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
      <a href="{{url('/customer')}}">User-Creation</a>
     
      
    </div>
    
   
     
      <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
   
    
    
    

    <div class="container" >
        <a class="btn btn-primary" href="{{url('\customer')}}" role="button">Back</a>
      <div id="main">
        <table class="table text-center">
            
            <thead  class="thead-dark">
                <tr >
                    <th>Name</th>
                    <th>Email</th>
                    
                    <th>Address</th>
                    <th>Gender</th>
                    <th>phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $customers as $value)
                    
               
                <tr>
                    <td>{{$value->customer_name}}</td>
                    <td>{{$value->customer_email}}</td>
                   
                    <td>{{$value->address}}</td>
                    <td>{{$value->gender}}</td>
                    <td>{{$value->phone}}</td>
                    <td>
                        <a href="{{url('customer/delete/')}}/{{$value->customer_id}}"> <button type="button" class="btn btn-danger">Delete</button></a></td>
                    <td><a href="{{url('edit/')}}/{{$value->customer_id}}"><button type="button" class="btn btn-success">Edit</button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    </div>

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




