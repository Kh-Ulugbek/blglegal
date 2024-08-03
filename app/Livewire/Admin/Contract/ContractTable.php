<?php

namespace App\Livewire\Admin\Contract;

use App\Models\Contract;
use Livewire\Component;
use Livewire\WithPagination;

class ContractTable extends Component
{
    use WithPagination;

    public $sort_type = 'contracts.created_at';
    public $direction = 'desc';
    public $search_term = '';

    public function render()
    {
        // if no data create fake data
        if (!Contract::query()->count()) {
            Contract::createFakeData();
        }
        //
        $list = Contract::query()
            ->when($this->sort_type, function ($q) {
                $q->orderBy($this->sort_type, $this->direction);
            })
            ->get();
        return view('livewire..admin.contract.contract-table', compact('list'));
    }

    public function delete($id)
    {
        Contract::query()->findOrFail($id)->delete();
        $this->render();
    }
}
