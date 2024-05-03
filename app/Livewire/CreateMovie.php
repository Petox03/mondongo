<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\movie;
use Livewire\Attributes\Validate;

class CreateMovie extends Component
{
    #[Validate('required', message:'El nombre de la película no debe estar vacío')]
    public string $movie_name;
    #[Validate('required', message:'Debe haber al menos un género')]
    public string $genre;
    #[Validate('required', message:'La película debe tener una duración')]
    public int $duration;
    #[Validate('required', message:'La película debe tener al menos un director')]
    public string $director;
    public string $synopsis;

    public function addMovie(): void
    {
        $this->validate();

        Movie::create([
            'name' => $this->movie_name,
            'genre' => $this->genre,
            'duration' => $this->duration,
            'director' => $this->director,
            'synopsis' => $this->synopsis,
            'reviews' => []
        ]);

        $this->reset(['movie_name', 'genre', 'duration', 'director', 'synopsis']);
        $this->dispatch('movieAdded');
    }
    public function render()
    {
        return view('livewire.create-movie');
    }
}
