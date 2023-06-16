<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    //read data
    public function Index()
    {
        $allData = product::paginate(5);
        return view('index', ['data' => $allData]);
    }
    public function Edit($id)
    {
        $dataedit = product::find($id);
        return view('edit', ['data' => $dataedit]);
    }
    public function Tambah()
    {
        return view('add');
    }

    //create data
    public function Simpan(Request $request)
    {
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('uploads', 'public_uploads');

            $newData = new product();
            $newData->photo = $path;
            $newData->nama = $request->nama;
            $newData->harga = $request->harga;
            $newData->save();
        }
        return redirect('/index');
    }

    //update data
    public function Ubah(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
        ]);

        // Periksa apakah ada file foto yang diunggah
        if ($request->hasFile('photo')) {
            // Simpan foto yang diunggah ke folder tertentu
            $path = $request->file('photo')->store('uploads', 'public_uploads');

            // Update data produk termasuk foto baru
            product::where('id', $request->id)->update([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'photo' => $path,
            ]);
        } else {
            // Update data produk tanpa mengubah foto
            product::where('id', $request->id)->update([
                'nama' => $request->nama,
                'harga' => $request->harga,
            ]);
        }

        return redirect('/index');
    }



    //delete data
    public function Hapus($id)
    {
        $dataDelete = product::find($id);
        $dataDelete->delete();
        return redirect('/index');
    }
}
