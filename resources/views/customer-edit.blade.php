
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
  
  <body>
    
  
    <form  action="{{url('/')}}/customer" method="post">
      @csrf
      <div id="main">
    <div class=" container">
      <a class="btn btn-primary" href="{{url('/')}}" role="button">Back</a>
      <h1 class="text-center">Upadet Form</h1>
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$customers->customer_name}}">
        <span class="text-danger">
          @error('name')
           {{$message}}
           @enderror
        </span>
     
      </div>
      <div class="form-group">
        <label for="">email</label>
        <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$customers->customer_email}}" >
        <span class="text-danger">
          @error('email')
          {{$message}}
           @enderror
        </span>
      </div>
      
      
       
      <div class="form-group">
        <label for="">address</label>
        <input type="text" name="address" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$customers->	address}}"  >
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
        <input type="number" name="phone" id="" class="form-control" placeholder="" aria-describedby="helpId"  value="{{$customers->phone}}"  >
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
 
  </body>
</html>

