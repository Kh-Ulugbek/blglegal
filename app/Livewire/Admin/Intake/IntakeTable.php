<?php

namespace App\Livewire\Admin\Intake;

use App\Models\Intake;
use Livewire\Component;
use Livewire\WithPagination;

class IntakeTable extends Component
{
    use WithPagination;

    public $sort_type = 'intakes.created_at';
    public $direction = 'desc';
    public $search_term = '';

    public function render()
    {
        $list = Intake::query()
            ->when($this->search_term != '', function ($q) {
                $q->where('intakes.first_name', 'ilike', '%' . $this->search_term . '%')
                    ->orWhere('intakes.last_name', 'ilike', '%' . $this->search_term . '%')
                    ->orWhere('intakes.email', 'ilike', '%' . $this->search_term . '%');
            })
            ->when($this->sort_type, function ($q) {
                $q->orderBy($this->sort_type, $this->direction);
            })
            ->paginate();
        return view('livewire..admin.intake.intake-table', compact('list'));
    }
}
