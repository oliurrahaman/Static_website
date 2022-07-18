<!DOCTYPE html>
<html lang="en">
<head>
  <title>Congent IT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="javascript:void(0)">CongentIT</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link me-5" href="{{url('/home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-5" href="{{url('/About')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-5" href="{{url('/student')}}">Students</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-5" href="{{url('/tecaher')}}">Teachers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-5" href="{{url('/attandance')}}">Attandance</a>
          </li>
        </ul>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown">courses</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">PWAD</a></li>
              <li><a class="dropdown-item" href="#">DDD</a></li>
              <li><a class="dropdown-item" href="#">Network</a></li>
            </ul>
          </li>
        <form class="d-flex">
          <input class="form-control me-2" type="text" placeholder="Search">
          <button class="btn btn-primary" type="button">Search</button>
        </form>
      </div>
    </div>
  </nav> 

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>About Us</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>
  
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>

</body>
</html>