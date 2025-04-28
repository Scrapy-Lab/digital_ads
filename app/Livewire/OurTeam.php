<?php

namespace App\Livewire;

use App\Models\OurTeam as ModelsOurTeam;
use Livewire\Component;

class OurTeam extends Component
{


    public $getTeams;

    public function mount(){

     $this->getTeams = ModelsOurTeam::where('status', 1)->get();
     // dd($this->getTestimonials)
 }

    public function render()
    {
        return view('livewire.our-team');
    }
}
