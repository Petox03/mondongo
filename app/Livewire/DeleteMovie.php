<?php

namespace App\Livewire;

use App\Models\movie;
use Livewire\Component;

class DeleteMovie extends Component
{
    public $movie;

    public function mount($id){
        $this->movie = movie::find($id);
    }

    public function delete(){
        $this->movie->delete();
        $this->dispatch('deletedMovie');
    }
    public function render()
    {
        return view('livewire.delete-movie');
    }
}
