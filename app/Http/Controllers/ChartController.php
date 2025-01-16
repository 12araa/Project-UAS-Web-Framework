<?php

namespace App\Http\Controllers;

use App\Models\Population;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        $statistics = Population::latest()->first();
        return view('pages.penduduk', compact('statistics'));
    }

    public function edit()
    {
        $statistics = Population::latest()->first();
        return view('pages.statistic.population_statistic', compact('statistics'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'total_penduduk' => 'required|integer',
            'jumlah_kk' => 'required|integer',
            'laki_laki' => 'required|integer',
            'perempuan' => 'required|integer',
            'kepadatan' => 'required|integer',
        ]);

        $statistic = Population::latest()->first();
        if (!$statistic) {
            $statistic = new Population();
        }

        $statistic->fill($request->all());
        $statistic->save();

        return redirect()->back()->with('success', 'Statistics updated successfully');
    }
}
