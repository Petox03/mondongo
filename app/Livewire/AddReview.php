<?php

namespace App\Livewire;

use App\Models\movie;
use Livewire\Component;

class AddReview extends Component
{
    public $movie;
    public $reviews;
    public string $user;
    public int $score;
    public string $comment;
    public function mount($id){
        $this->movie = movie::find($id);
        $this->reviews = $this->movie->reviews;
    }

    public function addReview() {
        // Asegúrate de validar los datos aquí
        $newReview = ['user' => $this->user, 'score' => $this->score, 'comment' => $this->comment];
        array_push($this->reviews, $newReview);
        $this->movie->reviews = $this->reviews;
        $this->movie->save();
        $this->dispatch('reviewAdded');
    }

    public function render()
    {
        return view('livewire.add-review');
    }
}
