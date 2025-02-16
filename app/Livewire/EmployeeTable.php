<?php

namespace App\Livewire;

use App\Models\Employee;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;
use Livewire\WithPagination;

class EmployeeTable extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 25;

    protected $queryString = ['search', 'perPage', ];

    public function updatingSearch()
    {
        $this->resetPage();
        $this->clearCache();
    }

    public function clearCache()
    {
        $cacheKey = "employees_{$this->search}_{$this->perPage}_page_" . $this->getPage();
        Cache::forget($cacheKey);
    }

    public function render()
    {
        $cacheKey = "employees_{$this->search}_{$this->perPage}_page_" . $this->getPage();
    
        $employees = Cache::remember($cacheKey, 600, function () {
            return Employee::where('name', 'like', "%{$this->search}%")
                ->orWhere('email', 'like', "%{$this->search}%")
                ->paginate($this->perPage);
        });
    
        return view('livewire.employee-table', ['employees' => $employees]);
    }

    public function refreshData()
    {
        $this->clearCache();
    }
}
