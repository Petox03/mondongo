<?php

namespace App\Livewire;
use App\Models\movie;
use Livewire\Component;

class SingleMovie extends Component
{
    protected function getListeners(): array
    {
        return [
            'reviewAdded' => 'render'
        ];
    }

    public $movie;
    public $greyStars;

    public function mount($id){
        $this->movie = movie::find($id);
    }

    public function render()
    {
        return view('livewire.single-movie');
    }
}
