<?php

namespace App\Livewire;

use App\Models\House;
use Livewire\Component;

class ContainerPoints extends Component
{
    /** @var int $selectedHouse */
    public $selectedHouse = 0;
    public int $points = 0;

    /** @var string|null $message */
    public $message = null;


    public function editPoints()
    {
        $this->validate([
            'selectedHouse' => 'required|exists:houses,id',
            'points' => 'required|int|min:-50|max:25',
        ]);

        if($this->points == 0) {
            $this->addError('points', 'Nula bodů nemůžeš dát!');
            return;
        }

        //$house = House::where('id', $this->selectedHouse)->first();
        $house = House::find($this->selectedHouse);
        $house->body = $house->body + $this->points;
        $house->save();

        $this->message = "Kolej " . $house->nazev . " byla upravena.";
        $this->reset(['points', 'selectedHouse']);
    }



    public function render()
    {
        $houses = House::all();

        return view('livewire.container-points', ['koleje' => $houses]);
    }
}
