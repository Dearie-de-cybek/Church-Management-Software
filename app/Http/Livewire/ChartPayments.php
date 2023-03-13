<?php

namespace App\Http\Livewire;
use App\Models\Payment;
use Livewire\Component;

class ChartPayments extends Component
{
    public $thisYearPayments;
    public $selectedYear;

    public function mount(){
        $this->updatePaymentsCount();
        $this->selectedYear = date('Y');
    }

    public function updatePaymentsCount(){
        $this->thisYearPayments = Payment::query()->whereYear('created_at', date('Y'))->groupByMonth();
    }

    public function render()
    {
        $availableYears = [
            date('Y'), date('Y') -1, date('Y') - 2, date('Y') -3,
        ];
        return view('livewire.chart-payments', [
            'availableYears' => $availableYears,
        ]);
    }
}
