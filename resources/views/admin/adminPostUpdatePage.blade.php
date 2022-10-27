@extends('admin.layouts.main')
@section('content')
<div class="container">
    <div class="text-dark text-center fs-1">Post Table</div>
    <div class="d-flex justify-content-between container">
        <div class="stats shadow">

            <div class="stat">
              <div class="stat-title">Total Posts</div>
              <div class="stat-value">{{count($data)}}</div>
            </div>

          </div>
        <a href="{{route('admin#createPostPage')}}">
            <button class="btn btn-primary">Create</button>
        </a>
    </div>
    <div class="my-3 conatiner flex">
        <div class="form-control  max-w-xs mt-3 col-4">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <label class="label">
                <span class="label-text">Title</span>
                </label>
                <input name="title" type="text" placeholder="Type here" class="input w-full max-w-xs bg-indigo-300  placeholder:text-slate-50" value="{{$updatedData->title}}" />
                @error('title')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <label class="label">
                <span class="label-text">Description</span>
                </label>
                <textarea name="description" type="text" placeholder="Type here" class="textarea textarea-bordered w-full max-w-xs  bg-indigo-300 text-slate-50 placeholder:text-slate-50">{{$updatedData->description}}</textarea>
                @error('description')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <div>
                <label class="label">
                <span class="label-text">Image</span>
                </label>
                <img src="{{asset('storage/'.$updatedData->image)}}" value="" class="img-thumbnails my-2"  width="50">
                </img>
                <input name="image" type="file" class="text-sm text-grey-500
                file:mr-5 file:py-2 file:px-6
                file:rounded-full file:border-0
                file:text-sm file:font-medium
                file:bg-blue-50 file:text-blue-500
                hover:file:cursor-pointer hover:file:bg-blue-500
                hover:file:text-slate-100" value="asfdskfajsdhfjh"/>
                @error('image')
                <small class="text-danger">{{$message}}</small>
                @enderror
                </div>


                <button class="btn btn-primary my-3 btn-sm" type="submit">Update</button>
            </form>
        </div>
        <div class="container mt-3 w-75">
            <table class="table table-primary">
                <thead>
                <tr>
                    <th class="">ID</th>
                    <th class="">Image</th>
                    <th class="">Title</th>
                    <th class=""></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                    <tr>
                        <th>{{$d->id}}</th>
                        <td><img src="{{asset('storage/'.$d->image)}}" width="100" alt=""></td>
                        <td>{{$d->title}}</td>

                        <td>
                            <div class="flex">
                                <a href="{{route('admin#updatePostPage',$d->id)}}" class="inline">

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" width="20">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>

                            </a>
                            <a href="{{route('admin#deletePost',$d->id)}}" class="inline">

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
            <div>
                {{$data->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
