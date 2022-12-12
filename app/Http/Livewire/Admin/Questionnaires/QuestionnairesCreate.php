<?php

namespace App\Http\Livewire\Admin\Questionnaires;

use Livewire\Component;

class QuestionnairesCreate extends Component
{
    public $título, $pregunta, $opción;

    public $x = 1;

    public $y = 1;

    public $questions = array(	
        0 => array(
            0 => 0
        ),
    );

    protected function rules(){
        $array = [];

        $array['título'] = 'required|string|max:250';

        foreach($this->questions as $a => $options){
            $array['pregunta.'.$a] = 'required|string|max:4294967295';
            foreach($options as $b => $optionsValues){
                $array['opción.'.$a.'.'.$b] = 'required|string|max:4294967295';
            }
        }

        return $array;
    }

    protected $messages = [
        'pregunta.*.required' => 'El campo pregunta es obligatorio.',
        'opción.*.*.required' => 'El campo opción es obligatorio.',
    ];

    public function addQuestion($x){

        if($x == 1){
            $x = 0;
        }

        array_push($this->questions, array($x));

        $x = $x + 1;

        $this->x = $x;
    }

    public function addOption($x, $y){

        $y = $y + 1;

        array_push($this->questions[$x], $y);
    }

    public function removeQuestion($x){

        unset($this->questions[$x]);

        $x = $x - 1;

        $this->$x = $x;
    }

    public function removeOption($x, $y){

        unset($this->questions[$x][$y]);

        $this->$x = $x;
    }

    public function render()
    {
        return view('livewire.admin.questionnaires.questionnaires-create');
    }
}