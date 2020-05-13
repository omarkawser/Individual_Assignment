<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Author Dashboard</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('fronted/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{asset('fronted/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  

       <!-- we add this -->
       <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">


  <!-- Custom styles for this template -->
  <link href="{{asset('fronted/css/clean-blog.min.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          <!-- <li class="nav-item">
            <a class="nav-link" href="">Dashboard</a>
          </li> -->


          <li class="nav-item">
            <a class="nav-link" href="">Home </a>
          </li>
            
            
          <li class="nav-item">
            <a class="nav-link" href="{{route('Student.profile')}}">Student  Profile</a>
          </li>



          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/logout')}}">Logout</a>
          </li>


        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url({{asset('fronted/img/home-bg.jpg')}}">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
           
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
   
   @yield('content')
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
       
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('fronted/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('fronted/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{asset('fronted/js/clean-blog.min.js')}}"></script>

    <!-- testere js link      -->

    <script src="{{asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>

    <script type="text/javascript"  src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" ></script>

  <script>
    @if(Session::has('message'))

        var type="{{Session::get('alert-type', 'info')}}"

        switch(type){
    case 'info';
        toastr.info("{{Session::get('messege')}}");
        break;

        case 'success';
        toastr.info("{{Session::get('messege')}}");
        break;

        case 'warning';
        toastr.warning("{{Session::get('messege')}}");
        break;

        case 'error';
        toastr.error("{{Session::get('messege')}}");
        break;
        


        }
 

 @endif


 </script>




//     <script>
    
//     $(document).on("click", "#delete", function(e){
//       e.preventDefault();
//        var link =$(this).attr("href");
//     swal({
//   title: "Are you sure?",
//   text: "You will not be able to recover this imaginary file!",
//   type: "warning",
//   showCancelButton: true,
//   confirmButtonClass: "btn-danger",
//   confirmButtonText: "Yes, delete it!",
//   cancelButtonText: "No, cancel plx!",
//   closeOnConfirm: false,
//   closeOnCancel: false
// },
// function(isConfirm) {
//   if (isConfirm) {
//     swal("Deleted!", "Your imaginary file has been deleted.", "success");
//   } else {
//     swal("Cancelled", "Your imaginary file is safe :)", "error");
//   }
// } );
// });
    
    
//     </script>



</body>

</html>
