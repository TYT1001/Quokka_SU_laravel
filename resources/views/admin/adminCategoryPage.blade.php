@extends('admin.layouts.main')
@section('content')
<div class="container">
    <div class="text-dark text-center fs-1">Post Table</div>
    <div class="d-flex justify-content-end container">

        <div class="stats shadow  flex content-end  bg-slate-50 text-slate-600">

            <div class="stat">
              <div class="stat-title">Total</div>
              <div class="stat-value">{{count($data)}}</div>
            </div>

          </div>
        <div class="stats shadow">



          </div>

    </div>
    <div class="my-3 conatiner flex">
        <div class="mx-3">
        <div class="form-control  max-w-xs mt-3 col-4 h-auto">
            <form action="{{route('admin#categoryCreate')}}" method="post">
                @csrf
                <div class="mb-2">
                    <label class="label">
                        <span class="label-text">Name</span>
                    </label>
                    <input name="name" type="text" placeholder="Type here" class="input w-full max-w-xs bg-indigo-300  placeholder:text-slate-50" />
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <button class="btn btn-primary my-2 btn-sm justify-end" type="submit">Create</button>
            </form>
        </div>
    </div>
        <div class="container mt-3 w-75">
            <table class="table table-primary">
                <thead>
                <tr>
                    <th class="col-1">ID</th>
                    <th class="col-2">name</th>


                    <th class="col-1"></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $d)
                <tr>
                    <th scope="row">{{$d->id}}</th>
                    <td>{{$d->name}}</td>


                    <td class="flex d-flex">
                        <a href="{{route('admin#categoryDelete',$d->id)}}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"  width="20">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </a>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
@push('scriptSource')

    <script>

        let inputVal = document.getElementById('category_name');
        let btn = document.getElementById('button')
        let data = {'category_name': 'sdsd'};
        btn.addEventListener('click',async(e)=>{
            let query = inputVal.value
            let url = (`${window.location.origin}/admin/category/create/${query}`)
            if(query){
                try {
                    let response = await axios.get(url).then(response=>{
                        console.log(response)
                    })
                } catch (error) {
                    console.log(error);
                }

            }
            else{
                document.getElementById('category_validation').textContent = 'Category is required';
            }
            inputVal.value = ''
            location.reload();
        }
        )

    </script>
@endpush
