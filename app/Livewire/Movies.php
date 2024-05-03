<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\movie;
use Illuminate\View\View;
use Livewire\Attributes\On;

class Movies extends Component
{
    public $movies;
    public string $search = "";

    /**
     * Especifica los listeners de eventos para el componente.
     *
     * @return array
     */
    protected function getListeners(): array
    {
        return [
            'movieAdded' => 'getMovies',
            'deletedMovie' => 'getMovies',
            'editedMovie' => 'getMovies',
        ];
    }

    /**
     * Obtiene todas las películas de la base de datos y las asigna a la propiedad $movies del componente.
     *
     * @return void
     */
    public function getMovies(): void
    {
        $this->movies = movie::all();
    }

    public function render(): View
    {
        $this->movies = movie::where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('genre', 'like', '%' . $this->search . '%')
                    ->orWhere('director', 'like', '%' . $this->search . '%')
                    ->get();
        return view('livewire.movies');
    }
}
