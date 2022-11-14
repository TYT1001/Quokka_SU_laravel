<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    @vite('resources/css/app.css')
    @livewireStyles
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>SU | HOME</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light sticky-top containerlg-fluid bg-dark text-slate-100">
		<div class="container homecontent">
			<a class="navbar-brand" href="#">
				<img src="{{asset('image/su_logo_rounded.png')}}" alt="Logo" style="width: 60px;" class="rounded-pill ">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse " id="nav">
				<ul class="navbar-nav text-slate-50">
					<li class="nav-item"><a class="nav-link font-mono text-sm-center" href="{{url('/')}}">Home</a></li>
					<li class="nav-item"><a class="nav-link font-mono" href="{{url('/#about')}}">About Us</a></li>
					<li class="nav-item"><a class="nav-link font-mono" href="{{url('/#news')}}">News</a></li>
					<li class="nav-item"><a class="nav-link font-mono tracking-tight" href="{{route('user#nonCdmPage')}}">Non Cdm List</a></li>
				</ul>
			</div>
		</div>
	</nav>
    @yield('content')
    <footer class="container">
        <div class="flex justify-center mt-3">
            <a href="#"><img src="{{asset('image/fb-icon.png')}}" alt=""></a>
        <a href="#"><img src="{{asset('image/ig_icon.png')}}" alt=""></a>
        <a href="#"><img src="{{asset('image/twitter_icon.png')}}" alt=""></a>
        </div>
        <br>
		<div class="row footerbase">
            <div class="col-12 d-flex justify-content-center">
                <small class="text-muted">
                    ©student union
                </small>
                <small class="text-muted">
                    Disclaimer, Privacy & Copyright
                </small>
            </div>
        </div>
	</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    @yield('scriptSource')
    <script>

        const sections = document.querySelectorAll("section[id]");


        function scrollActive() {

          const scrollY = window.pageYOffset;           // scroll height


          sections.forEach((current) => {
            const sectionHeight = current.offsetHeight, // get current height
              sectionTop = current.offsetTop - 58,      // get current section of height
              sectionId = current.getAttribute("id");   // get current section id
            if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
              document
                .querySelector("a[href*=" + sectionId + "]").classList.add("active-link");
            } else {
              document
                .querySelector("a[href*=" + sectionId + "]").classList.remove("active-link");
            }
          });
        }
        window.addEventListener("scroll", scrollActive);
      </script>
      @livewireScripts
</body>
</html>


