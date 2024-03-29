@extends('admin.layouts.main')
@section('content')
    <div class="container">
        <h1 class="fs-1  text-danger text-center">Non Cdm Table</h1>
        <div class="d-flex justify-content-between container py-3">
            <div class="stats shadow bg-slate-50 text-slate-600">

                <div class="stat ">
                  <div class="stat-title">Total</div>
                  <div class="stat-value">{{count($data)}}</div>
                </div>

              </div>
            <form action="" class="flex justify-center">
                <input type="text" class="input input-bordered me-3 bg-slate-50" name="key" placeholder="Search" value="{{request('key')}}">
                <button class="btn btn-primary" type="submit">search</button>
            </form>
        </div>
        <div class="my-3 conatiner flex">
            <div class="mx-3">
            <div class="form-control  max-w-xs mt-3 col-4">
                <form action="{{route('admin#nonCdmCreate')}}" method="post">
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
                    <div>
                        <label class="label">
                            <span class="label-text">Occupation</span>
                        </label>
                        <select name="occupation" class="select select-bordered w-full bg-indigo-300">
                            <option selected disabled>Choose Occupation</option>
                            <option value="instructor">instructor</option>
                            <option value="student">student</option>
                        </select>
                        @error('occupation')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div>
                        <label class="label">
                            <span class="label-text">Acedamic Year</span>
                        </label>
                        <select name="year" class="select select-bordered w-full bg-indigo-300">
                            <option selected disabled>Which year?</option>
                            <option value="firstYear">first year</option>
                            <option value="secondYear">second year</option>
                            <option value="thirdYear">third year</option>
                            <option value="fourthYear">fourth year</option>
                            <option value="fifthYear">fifth year</option>
                        </select>
                        @error('year')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div>
                        <label class="label">
                            <span class="label-text">University</span>
                        </label>
                        <select name="uni_id" class="select select-bordered w-full bg-indigo-300">
                            <option selected disabled>Choose University</option>
                            <option value="1">University of Computer Studies(Yangon)</option>
                            <option value="2">University of Computer Studies(Thahton)</option>
                            <option value="3">University of Computer Studies(Magway)</option>
                            <option value="4">University of Computer Studies(Mandalay)</option>
                            <option value="5">University of Computer Studies(Taunggyi)</option>
                        </select>
                        @error('uni_id')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <button class="btn btn-primary my-3 btn-sm" type="submit">Create</button>
                </form>
            </div>
        </div>
            <div class="container mt-3 w-75">
                <table class="table table-primary">
                    <thead>
                    <tr>
                        <th class="col-1">ID</th>
                        <th class="col-2">name</th>
                        <th class="col-2">occupation</th>
                        <th class="col-3">academic year</th>
                        <th class="col-3">university</th>
                        <th class="col-2"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $d)
                        <tr>
                            <th scope="row">{{$d->id}}</th>
                            <td>{{$d->name}}</td>
                            <td>{{$d->occupation}}</td>
                            <td>{{$d->year}}</td>
                            <td>{{$d->uni_name}}</td>
                            <td class="flex items-center content-end w-100" >
                                <a href="{{route('admin#nonCdmUpdatePage',$d->id)}}" class="inline">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" width="20">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                </a>
                                <a href="{{route('admin#nonCdmDelete',$d->id)}}" class="inline">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"  width="20">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                </a>
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

