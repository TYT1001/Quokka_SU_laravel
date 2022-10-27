@extends('user.layout.main')
@section('content')
<section class="detail-section">
    <div class="container my-3">
        <a href="{{url('/#news')}}" class="position-absolute bg-teal-500 p-4 rounded-full hover:text-slate-50" style="left: 1%;top:43%">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" width="500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
            </svg>
        </a>
    <div class="card p-5 w-1/2 mx-auto">
            <h1 class="text-3xl font-bold text-start font-mono">{{$data->title}}</h1>
            <small class="text-slate-500 ms-1 text-lg">{{$data->created_at->format('j-F-Y')}}</small>
            <img src="{{asset('storage/'.$data->image)}}" alt="" width="400" class=" my-4 mx-auto">
            <p class="text-slate-800 text-xl text-justify tracking-wide font-serif leading-9">{{$data->description}}</p>
        </div>
    </div>
</section>
@endsection