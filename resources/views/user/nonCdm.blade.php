@extends('user.layout.main')
@section('content')
<section  style="height: 55vh">
    <div class="container d-flex flex-column justify-content-center h-100">

            <h1 class="fs-2 text-center font-mono">NonCdm List</h1>
            <h1 class="fs-2 text-center ">According to the University</h1>
            <table class="table table-black col-6 mx-auto mt-5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th></th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($unis as $uni)
                    <tr>
                        <td>{{$uni->id}}</td>
                        <td>{{$uni->name}}</td>
                        <td>
                            <div class="">
                                <a href="{{route('user#nonCdmList',$uni->id)}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" width="20">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>

    </div>
</section>

@endsection
@section('scriptSource')
<script>
    console.log('Hi')
    const home = document.getElementById('home')
    console.log(home)
    document.querySelector('about')
    document.querySelector('news')
</script>
@endsection
