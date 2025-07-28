<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Brand;
use App\Models\Sale;
use App\Models\Client;


class DashboardController extends Controller
{
    public function index()
    {
        $totalItems = Item::count();
        $totalSuppliers = Supplier::count();
        $totalBrands = Brand::count();
        $totalCategories = Category::count();

        $latestSales = Sale::with(['product', 'client'])
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('dashboard.index', [
            'clientsCount' => Client::count(),
            'totalSales' => Sale::sum('amount'),
            'performance' => 256, // ou calcula dinamicamente
            'recentSales' => Sale::with(['product', 'client'])->orderBy('created_at', 'desc')->take(5)->get(),
        ]);

    }
}

