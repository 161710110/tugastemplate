<?php

use Illuminate\Database\Seeder;

class barangseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang =[
        	['kode_barang'=>'111','nama_barang'=>'botol kecap','harga'=>'2000' ],
        	['kode_barang'=>'222','nama_barang'=>'mangkok','harga'=>'20000' ],
        	['kode_barang'=>'333','nama_barang'=>'layer','harga'=>'5000' ]
    		];
        	DB::table('barangs')->insert($barang);
    }
}
