<?php

namespace App\Http\Livewire\Admin\Questionnaires;

use App\Models\Questionnaire;
use Livewire\Component;
use Livewire\WithPagination;

class QuestionnairesIndex extends Component
{
    use WithPagination;
    
    public $search, $order;
    public $sort = 'id';
    public $direction = 'desc';

    protected $paginationTheme = "bootstrap";

    public function updatingSearch(){
        $this->resetPage();
    }
    
    public function updatedorder($order){
        if($order == 1){
            $this->direction = 'asc';
        }
        switch($order){
            case 1:
                $this->sort = 'id';
                $this->direction = 'desc';
            break;
            case 2:
                $this->sort = 'id';
                $this->direction = 'asc';
            break;
            case 3:
                $this->sort = 'título';
                $this->direction = 'asc';
            break;
            case 4:
                $this->sort = 'título';
                $this->direction = 'desc';
            break;
        }
    }

    public function render()
    {
        $all_questionnaires = Questionnaire::all()->count();

        $questionnaires = Questionnaire::Where('título', 'LIKE', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)
            ->latest('id')
            ->paginate();

        return view('livewire.admin.questionnaires.questionnaires-index', [
            'all_questionnaires' => $all_questionnaires,
            'questionnaires' => $questionnaires
        ]);
    }
}
