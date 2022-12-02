<?php

namespace App\Http\Livewire\Admin\Students;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class StudentsIndex extends Component
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
                $this->sort = 'nombre';
                $this->direction = 'asc';
            break;
            case 4:
                $this->sort = 'nombre';
                $this->direction = 'desc';
            break;
        }
    }

    public function render()
    {   
        $all_students = Student::all()->count();

        $students = Student::Where('nombre', 'LIKE', '%' . $this->search . '%')
                    ->orderBy($this->sort, $this->direction)
                    ->latest('id')
                    ->paginate();

        return view('livewire.admin.students.students-index', [
            'all_students' => $all_students,
            'students' => $students
        ]);
    }
}
