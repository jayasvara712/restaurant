<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    public function index()
    {
        $makanan = Product::with('category')->where('id_category', 1)->get();
        $minuman = Product::with('category')->where('id_category', 2)->get();

        $data_minuman = [
            ['nama' => 'Es Teh',                'harga' => 'Rp.5.000'],
            ['nama' => 'Es Jerul',              'harga' => 'Rp.5.000'],
            ['nama' => 'Es Cendol',             'harga' => 'Rp.7.000'],
            ['nama' => 'Es Cincau Hitam',       'harga' => 'Rp.7.000'],
            ['nama' => 'Es Nanas',              'harga' => 'Rp.7.000'],
            ['nama' => 'Es Timun Selasi',       'harga' => 'Rp.7.000'],
            ['nama' => 'Es Kitna',              'harga' => 'Rp.10.000'],
            ['nama' => 'Es Jelly Susu',         'harga' => 'Rp.10.000'],
            ['nama' => 'Es Gula',               'harga' => 'Rp.5.000'],
            ['nama' => 'Es Kurnia',             'harga' => 'Rp.10.000'],
            ['nama' => 'Es Tebu',               'harga' => 'Rp.7.000'],
            ['nama' => 'Es Markisa',            'harga' => 'Rp.10.000'],
            ['nama' => 'Es Extra Joss',         'harga' => 'Rp.8.000'],
            ['nama' => 'Soda Gembira',          'harga' => 'Rp.15.000'],
            ['nama' => 'Teh Botol',             'harga' => 'Rp.5.000'],
            ['nama' => 'Temu Lawak',            'harga' => 'Rp.5.000'],
            ['nama' => 'Liang Teh Botol',       'harga' => 'Rp.7.000'],
            ['nama' => 'Lohan Kuo',             'harga' => 'Rp.7.000'],
            ['nama' => 'Ke Hwa Cing',           'harga' => 'Rp.7.000'],
            ['nama' => 'Badak',                 'harga' => 'Rp.20.000'],
            ['nama' => 'Air Mineral',           'harga' => 'Rp.5.000' ],
            ['nama' => 'Es Campur Meeta',       'harga' => 'Rp.10.000' ],
        ];

        // dd($data_makanan);
        return view('index', [
            'makanan' => $makanan,
            'minuman' => $minuman,
        ]);
    }

    public function menu_view(Request $request, $id_product)
    {
        $data = Product::findOrFail($id_product);

        // return response()->json(['data' => $data]);
        return view('modal', compact('data'));
        // return view('modal', [
        //     'data' => $data
        // ]);
    }
}
