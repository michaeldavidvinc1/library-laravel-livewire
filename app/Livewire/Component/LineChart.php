<?php

namespace App\Livewire\Component;

use App\Models\Transaction;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;
use ArielMejiaDev\LarapexCharts\LarapexChart;

#[Layout('layouts.auth')]
class LineChart extends Component
{

    public $chartData, $borrowsData;

    public function mount()
    {
        $currentYear = date('Y');

        // User Registration
        // Ambil semua bulan dalam satu tahun
        $allMonths = range(1, 12);
        // Ambil data registrasi untuk setiap bulan
        $monthlyRegistrations = User::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->whereYear('created_at', $currentYear)
            ->groupBy('month')
            ->pluck('total', 'month')
            ->all();
        // Isi nilai nol untuk bulan yang tidak memiliki registrasi
        foreach ($allMonths as $month) {
            if (!isset($monthlyRegistrations[$month])) {
                $monthlyRegistrations[$month] = 0;
            }
        }
        // Urutkan array berdasarkan kunci bulan
        ksort($monthlyRegistrations);
        // Persiapkan array untuk label dan data
        $data = [
            'label' => [],
            'data' => [],
        ];
        // Isi array label dan data
        foreach ($monthlyRegistrations as $month => $total) {
            $data['label'][] = date("F", mktime(0, 0, 0, $month, 1)); // Ubah angka bulan menjadi nama bulan
            $data['data'][] = $total;
        }

        // Borrows
        $allMonths = range(1, 12);
        // Ambil data registrasi untuk setiap bulan
        $borrows = Transaction::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->whereYear('created_at', $currentYear)
            ->groupBy('month')
            ->pluck('total', 'month')
            ->all();
        // Isi nilai nol untuk bulan yang tidak memiliki registrasi
        foreach ($allMonths as $month) {
            if (!isset($borrows[$month])) {
                $borrows[$month] = 0;
            }
        }
        // Urutkan array berdasarkan kunci bulan
        ksort($borrows);
        // Persiapkan array untuk label dan data
        $dataBorrows = [
            'label' => [],
            'data' => [],
        ];
        // Isi array label dan data
        foreach ($borrows as $month => $total) {
            $dataBorrows['label'][] = date("F", mktime(0, 0, 0, $month, 1)); // Ubah angka bulan menjadi nama bulan
            $dataBorrows['data'][] = $total;
        }

        $this->chartData = json_encode($data);
        $this->borrowsData = json_encode($dataBorrows);
    }

    public function render()
    {
        $chart = json_decode($this->chartData, true);
        return view('livewire.component.line-chart', ['chart' => $chart]);
    }
}
