<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login Page</title>
    @vite('resources/css/app.css')
</head>
<body >
    {{-- <div class="card lg:card-side bg-base-100 shadow-xl w-96">
        <div>

            <figure><img src="https://placeimg.com/400/400/arch" alt="Album"/></figure>
        </div>

        <form action="{{route('login')}}" method="post" class="card-body mx-auto py-10">
            @csrf
            <h1 class="card-title">Welcome to SU</h1>
            <h3 class="card-title">Login</h3>
            <div>
                <div>
                    <label for="email" class="label">Email</label>
                    <input type="email" name="email" id="" class="input">
                </div>
                <div>
                    <label for="password" class="label">Password</label>
                    <input type="password" name="password" id="" class="input">
                </div>
                <button type="submit" class="btn btn-black mt-3">Login</button>
            </div>
        </form>
    </div> --}}
    <div class="h-screen flex items-center justify-center">
        <div class="card lg:card-side bg-base-100 shadow-xl w-1/2">

                <img src="{{asset('image/logo-login.jpg')}}" alt="" width="350" height="400">


            <div class="card-body">
                <form action="{{route('login')}}" method="post" class="">
                    @csrf
                    <h1 class="card-title">Welcome to SU</h1>
                    <h3 class="card-title">Login</h3>
                    <div>
                        <div>
                            <label for="email" class="label">Email</label>
                            <input type="email" name="email" id="" class="input">
                        </div>
                        <div>
                            <label for="password" class="label">Password</label>
                            <input type="password" name="password" id="" class="input">
                        </div>
                        <button type="submit" class="btn btn-black mt-3">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



</body>
</html>
