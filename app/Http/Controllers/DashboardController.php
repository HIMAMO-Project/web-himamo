<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Informasi;
use App\Models\Kategori_Informasi;
use App\Models\Pustaka;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $kategoriCount = Kategori_Informasi::count();
        $informasiCount = Informasi::count();
        $pustakaCount = Pustaka::count();

        $startDate = Carbon::now()->subDays(30);
        $endDate = Carbon::now();

        $totalInformasi = Informasi::whereBetween('created_at', [$startDate, $endDate])->count();
        $totalPustaka = Pustaka::whereBetween('created_at', [$startDate, $endDate])->count();

        $monthlyActivity = [
            $totalInformasi,
            $totalPustaka
        ];

        return view('admin.dashboard', compact(
            'userCount',
            'kategoriCount',
            'informasiCount',
            'pustakaCount',
            'monthlyActivity'
        ));
    }
}
