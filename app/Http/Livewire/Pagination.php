<?php

namespace App\Http\Livewire;

use App\Models\post;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Pagination extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';
    public $category_id;
    public $categories;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    //search feature start

    public function mount(){
        $this->category_id = 0;
        $this->categories = Category::all();

    }


    public function render()
    {
        return view('livewire.pagination',[
            'posts'=> post::where(function($query){
                if($this->category_id){
                    $query->where('category_id',$this->category_id);
                }
            })
            ->select('posts.*','categories.name as category_name')
            ->leftJoin('categories','posts.category_id','categories.id')
            ->paginate(6),
            'categories' => $this->categories
        ]);
    }




}
