<?php

namespace App\Http\Livewire\Admin\Campuses;

use App\Models\Campus;
use Livewire\Component;
use Livewire\WithPagination;

class CampusesIndex extends Component
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
                $this->sort = 'campus';
                $this->direction = 'asc';
            break;
            case 4:
                $this->sort = 'campus';
                $this->direction = 'desc';
            break;
        }
    }

    public function render()
    {
        $all_campuses = Campus::all()->count();

        $campuses = Campus::Where('campus', 'LIKE', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)
            ->latest('id')
            ->paginate();

        return view('livewire.admin.campuses.campuses-index', [
            'all_campuses' => $all_campuses,
            'campuses' => $campuses
        ]);
    }
}
