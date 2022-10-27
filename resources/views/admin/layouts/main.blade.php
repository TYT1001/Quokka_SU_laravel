<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class=" sidebar" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

            <div class="sidebar-header">

                <div class="offcanvas-header">
                    <img src="{{asset('ucs_logo.jpg')}}" alt="" width="50">
                    <h5 class="offcanvas-title p-3" id="offcanvasExampleLabel">UCS Admindashboard</h5>
                </div>
            </div>

            <ul class="list-unstyled components">

                <li>
                    <a href="{{route('admin#home')}}" >Home</a>

                </li>
                <li>
                    <a href="{{route('admin#posts')}}">Posts</a>
                </li>
                <li>
                    <a href="{{route('admin#postCategories')}}">Post Categories</a>
                </li>
                <li>
                    <a href="{{route("admin#nonCdmPage")}}" >Non Cdm List</a>
                </li>
                <li>
                    <a href="{{route("admin#uniPage")}}" >University</a>
                </li>

            </ul>


        </div>
        <!-- Page Content -->
        <div class="p-3 container">
            <div class="flex justify-end">

                <form action="{{route("logout")}}" method="post">
                     @csrf
                <button class="btn btn-accent hover:text-red-500 hover:bg-teal-500" type="submit">Logout</button>
                </form>
            </a>
            </div>
            @yield('content')
        </div>

    </div>


      {{-- <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div>
            Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
          </div>
          <div class="dropdown mt-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
              Dropdown button
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>
        </div>
      </div> --}}

    <!-- JavaScript Bundle with Popper -->
    @stack('scriptSource')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
<script>
 const labels = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December'
  ];

  const Postsdata = {
    labels: labels,
    datasets: [{
      label: 'Posts',
      backgroundColor: 'rgb(100, 100, 255)',
      borderColor: 'rgb(255, 99, 132)',
      data: [5, 10, 5, 52, 20, 30, 15, 35, 55, 80, 15, 5, 19],
    }]
  };
  const NonCdmdata = {
    labels: labels,
    datasets: [{
      label: 'Posts',
      backgroundColor: 'rgb(255, 100, 100)',
      borderColor: 'rgb(255, 99, 132)',
      data: [15, 10, 5, 32, 20, 30, 15, 35, 55, 40, 15, 5, 19],
    }]
  };

  const config = {
    type: 'bar',
    data: Postsdata,
    options: {
        responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
      title: {
        display: true,
        text: 'Monthly Post Bar Chart'
      },
    }
    }
  };
  const config_1 = {
    type: 'bar',
    data: NonCdmdata,
    options: {
        responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
      title: {
        display: true,
        text: 'NonCdm Bar Chart'
      },
    }
    }
  };
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
  const myChart_1 = new Chart(
    document.getElementById('myChart_1'),
    config_1
  );


    </script>
</html>
