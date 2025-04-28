<?php

namespace App\Livewire;

use App\Models\Testimonial as ModelsTestimonial;
use Livewire\Component;

class Testimonial extends Component
{

   public $getTestimonials;

   public function mount(){

    $this->getTestimonials = ModelsTestimonial::where('status', 1)->get();
    // dd($this->getTestimonials)
}

    public function render()
    {
        return view('livewire.testimonial');
    }


}
