<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    public function index()
    {
        $data_makanan = [
            ['nama' => 'Nasi Goreng',                           'harga' => 'Rp.15.000'],
            ['nama' => 'Nasi Goreng Ayam Merah',                'harga' => 'Rp.18.000'],
            ['nama' => 'Nasi Goreng Kunyit',                    'harga' => 'Rp.15.000'],
            ['nama' => 'Nasi Goreng Kunyit Ayam Merah',         'harga' => 'Rp.18.000'],
            ['nama' => 'Nasi Goreng Angkak',                    'harga' => 'Rp.15.000'],
            ['nama' => 'Nasi Goreng Angkak Ayam Merah',         'harga' => 'Rp.18.000'],
            ['nama' => 'Nasi Goreng Kecombrang Ayam Merah',     'harga' => 'Rp.18.000'],
            ['nama' => 'Mie Goreng',                            'harga' => 'Rp.15.000'],
            ['nama' => 'Mie Goreng Ayam Merah',                 'harga' => 'Rp.18.000'],
            ['nama' => 'Kwitiau Goreng',                        'harga' => 'Rp.15.000'],
            ['nama' => 'Kwitiau Goreng Ayam Merah',             'harga' => 'Rp.18.000'],
            ['nama' => 'Bihun Goreng',                          'harga' => 'Rp.15.000'],
            ['nama' => 'Bihun Goreng Ayam Merah',               'harga' => 'Rp.18.000'],
            ['nama' => 'Ta Mie Goreng Ayam Merah',              'harga' => 'Rp.20.000'],
            ['nama' => 'Mie Ayam',                              'harga' => 'Rp.15.000'],
            ['nama' => 'Mie Ayam Pangsit',                      'harga' => 'Rp.20.000'],
            ['nama' => 'Kwitiau Ayam Merah',                    'harga' => 'Rp.15.000'],
            ['nama' => 'Kwitiau Ayam Merah + pangsit',          'harga' => 'Rp.20.000'],
            ['nama' => 'Bihun Goreng Ayam Merah',               'harga' => 'Rp.15.000'],
            ['nama' => 'Bihun Goreng Ayam Merah Pangsit',       'harga' => 'Rp.20.000'],
            ['nama' => 'Nasi Ayam Merah',                       'harga' => 'Rp.15.000' ],
        ];
        $makanan = Product::with('category')->where('id_category', 2)->get();

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

        $minuman = collect($data_minuman);

        // dd($data_makanan);
        return view('index', [
            'makanan' => $makanan,
            'minuman' => $minuman,
        ]);
    }

    public function menu_view()
    {
        return response()->json($data);
    }
}
