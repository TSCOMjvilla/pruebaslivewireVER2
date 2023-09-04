<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class EditPost extends Component
{
    public $post;

    protected $rules =[
        'post.title' =>'required',
        'post.content' =>'required',
    ];

    public function mount(Post $post){
        $this->post = $post;
    }

    public function save(){
        $this->validate();        
        $this->post->save();

        $this->emitTo('show-post','render');
        $this->emit('alert','El post fue editado satisfactoriamente');
    }

    public function render()
    {
        return view('livewire.edit-post');
    }
}
