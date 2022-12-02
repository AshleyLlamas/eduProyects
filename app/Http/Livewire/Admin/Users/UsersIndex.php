<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersIndex extends Component
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
                $this->sort = 'name';
                $this->direction = 'asc';
            break;
            case 4:
                $this->sort = 'name';
                $this->direction = 'desc';
            break;
        }
    }

    public function render()
    {
        $all_users = User::all()->count();

        $users = User::Where('name', 'LIKE', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)
            ->latest('id')
            ->paginate();

        return view('livewire.admin.users.users-index', [
            'all_users' => $all_users,
            'users' => $users
        ]);
    }
}
