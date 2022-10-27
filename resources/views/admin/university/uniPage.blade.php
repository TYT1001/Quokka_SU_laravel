@extends('admin.layouts.main')
@section('content')
<div class="container">
    <h1 class="fs-1  text-danger text-center">University</h1>
    <div class="d-flex justify-content-end container py-3">
        <form action="" class="flex justify-center">
            <input type="text" class="input input-bordered me-3 bg-indigo-100" name="key" placeholder="Search" value="{{request('key')}}">
            <button class="btn btn-primary" type="submit">search</button>
        </form>
    </div>
    <div class="my-3 flex ">
        <div class="w-50 flex justify-content-center">
            <div class="form-control max-w-sm mt-3">
                <form action="{{route('admin#uniCreate')}}" method="post" height="auto">
                    @csrf
                    <div>
                        <label class="label">
                            <span class="label-text">Name</span>
                        </label>
                        <input name="name" type="text" placeholder="Type here" class="input w-full max-w-xs bg-indigo-300  placeholder:text-slate-50" />
                        @error('name')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="">
                    <button class="btn btn-primary my-3 btn-sm" type="submit">Create</button>
                </div>
                </form>
            </div>
        </div>
        <div class="container mt-3 w-50 ">
            <table class="table table-primary">
                <thead>
                <tr>
                    <th class="col-1">ID</th>
                    <th class="col-2 text-center">name</th>

                    <th class="col-2"></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $d)
                    <tr>
                        <th scope="col-4">{{$d->id}}</th>
                        <td class="col-2 text-center"><div class="">{{$d->name}}</div></td>
                        <td class="flex items-center justify-content-end w-full col-2" >
                            <div class="flex">
                            <a href="{{route('admin#updatePostPage',$d->id)}}" class="inline">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" width="20">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                            </a>
                            <a href="{{route('admin#uniDelete',$d->id)}}" class="inline">

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"  width="20">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                            </a>
                        </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>{{$data->links()}}</div>
        </div>
    </div>
</div>

@endsection
