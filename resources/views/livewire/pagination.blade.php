<div class="relative top-10">

        <div class="flex justify-between items-center mb-3">
            <select name="" id="" wire:model="category_id" class="input input-bordered input-primary bg-warning relative left-14">
                <option value="">All</option>
                @foreach ($categories as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
            </select>
            <livewire:search-post />
        </div>

    <div class="container-lg d-flex flex-wrap">
    @foreach ($posts as $d)

        <div class="col-sm-6 card-bg py-4 px-3 d-flex">
            <div class="mt-2 p-3">
                <img src="{{asset('storage/'.$d->image)}}" alt="" width="100">
            </div>
            <div class="pe-3">
                <a href="#"><h5>{{$d->title}}</h5></a>
                <small>{{$d->created_at->format('j-F-Y')}}</small>
                <p>{{Str::words($d->description,30,'...')}}</p>
                <a href="{{route('home#postdetails',$d->id)}}" class="text-decoration-none text-end d-block">See more..</a>
            </div>
        </div>

    @endforeach
    </div>
    <div class="mt-3">
        {{$posts->links()}}
    </div>
</div>










