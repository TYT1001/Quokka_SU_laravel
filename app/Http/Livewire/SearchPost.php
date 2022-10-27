<?php

namespace App\Http\Livewire;

use App\Models\post;
use Livewire\Component;

class SearchPost extends Component
{
    public $query;
    public $posts;
    public $highlightIndex;

    public function mount(){
        $this->resett();
    }

    public function resett(){
        $this->query = '';
        $this->posts = [];
        $this->highlightIndex = 0;
    }

    public function incrementHighlight(){
        if($this->highlightIndex === count($this->posts)-1){
            $this->highlightIndex = 0;
            return;
        }
    }
    public function decrementHighlight(){
        if($this->highlightIndex === 0){
            $this->highlightIndex = count($this->posts)-1;
            return;
        }
    }
    public function selectPost(){
        $post = $this->posts[$this->highlightIndex]??null;
        if($post){
            $this->redirect(route('search-post',$post['id']));
        }
    }
    public function updatedQuery(){
        $this->posts = post::where('title','like','%'.$this->query.'%')->get()->toArray();

    }
    public function render()
    {
        return view('livewire.search-post');
    }
}
