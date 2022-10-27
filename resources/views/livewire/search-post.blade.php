<div class="w-72 ">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

        <input
            type="text"
            name="key"
            class="input input-bordered input-primary bg-warning"
            placeholder="Search posts.."
            wire:model="query"
            wire:keydown.escape="resett"
            wire:keydown.tab="resett"
            wire:keydown.ArrowUp="decrementHighlight"
            wire:keydown.ArrowDown="incrementHighlight"
            wire:keydown.enter="selectPost"
            >
            @if (!empty($query))
                @if(!empty($posts))

                <div class="absolute z-10 list-group bg-slate-100 rounded-t-none shadow-lg">
                    @foreach ($posts as $post)
                        <a href="{{route('home#postdetails',$post['id'])}}" class="text-slate-500 hover:text-slate-800 mb-2">{{$post['title']}}</a>

                    @endforeach
                </div>

                @else
                <div>
                    <h5>No result!</h5>
                </div>
                @endif
            @endif




</div>
