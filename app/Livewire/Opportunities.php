<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Item;
use Illuminate\Pagination\Paginator;

class Opportunities extends Component
{
    use WithPagination;

    public $perPage = 20; // Default number of items per page
    public $options = [20, 50, 100, 250]; // Options for items per page
    protected $queryString = ['perPage', 'search']; // Keep perPage in the URL
    public $search = '';
    public $sortField = 'id'; // Default sort field
    public $sortDirection = 'asc'; // Default sort order

    public function update()
    {

        $currentPage = 1;
        Paginator::currentPageResolver(function () use ($currentPage) {
            return  $currentPage;
        });

        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection === 'asc';
        }

        $this->sortField = $field;
    }

    public function render()
    {
        $query = Item::query();

        if ($this->search) {
            $query->where('name', 'like', "%" . $this->search . "%");
        }

        $items = $query->orderBy($this->sortField, $this->sortDirection)->paginate($this->perPage);

        return view('livewire.opportunities', [
            'items' => $items,
        ]);
    }
}