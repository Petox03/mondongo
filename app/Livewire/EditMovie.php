<?php

namespace App\Livewire;

use App\Models\movie;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditMovie extends Component
{
    public $movie;
    #[Validate('required', message:'El nombre de la película no debe estar vacío')]
    public string $movie_name;
    #[Validate('required', message:'Debe haber al menos un género')]
    public string $genre;
    #[Validate('required', message:'¿Apoco no dura nada la peli?')]
    public int $duration;
    #[Validate('required', message:'No se hace sola papito, dale créditos al director')]
    public string $director;
    public string $synopsis;

    public function mount($id){
        $this->movie = movie::find($id);
        $this->movie_name = $this->movie->name;
        $this->genre = $this->movie->genre;
        $this->duration = $this->movie->duration;
        $this->director = $this->movie->director;
        $this->synopsis = $this->movie->synopsis;
    }
    public function update(){
        $this->validate();

        $this->movie->name = $this->movie_name;
        $this->movie->genre = $this->genre;
        $this->movie->duration = $this->duration;
        $this->movie->director = $this->director;
        $this->movie->synopsis = $this->synopsis;

        $this->movie->save();

        $this->dispatch('editedMovie');
    }
    public function render()
    {
        return view('livewire.edit-movie');
    }
}
