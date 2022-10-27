@extends('user.layout.main')
@section('content')
    <div class="container">
        <div class="  d-flex flex-column justify-content-center align-items-center" style="height: 55vh">
            <div class="">
                <div class="mb-3">

                    <h1 class="fs-2 font-mono">{{$data[0]->uni_name}}</h1>
                    <h2 class="fs-4 font-mono mt-3">NonCdm List</h2>
                </div>

                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Occupation</th>
                                <th>Acamedic Year</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i=0;$i<count($data);$i++)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$data[$i]->name}}</td>
                                <td>{{$data[$i]->occupation}}</td>
                                <td>{{$data[$i]->year}}</td>
                            </tr>
                            @endfor

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
