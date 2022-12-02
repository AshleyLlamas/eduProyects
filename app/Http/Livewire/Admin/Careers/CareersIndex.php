<?php

namespace App\Http\Livewire\Admin\Careers;

use App\Models\Career;
use Livewire\Component;
use Livewire\WithPagination;

class CareersIndex extends Component
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
                $this->sort = 'carrera';
                $this->direction = 'asc';
            break;
            case 4:
                $this->sort = 'carrera';
                $this->direction = 'desc';
            break;
        }
    }

    public function render()
    {
        $all_careers = Career::all()->count();

        $careers = Career::Where('carrera', 'LIKE', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)
            ->latest('id')
            ->paginate();

        return view('livewire.admin.careers.careers-index', [
            'all_careers' => $all_careers,
            'careers' => $careers
        ]);
    }
}
