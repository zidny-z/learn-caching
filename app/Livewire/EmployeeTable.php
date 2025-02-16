<?php

namespace App\Livewire;

use App\Models\Employee;
use Livewire\Component;
use Livewire\WithPagination;

class EmployeeTable extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 25;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $employees = Employee::where('name', 'like', "%{$this->search}%")
            ->orWhere('email', 'like', "%{$this->search}%")
            ->paginate($this->perPage);

        return view('livewire.employee-table', compact('employees'));
    }
}
