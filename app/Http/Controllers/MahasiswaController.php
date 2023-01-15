<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
#-- Untuk mengaktifkan library Strages
use Illuminate\Support\Facades\Storage;
class MahasiswaController extends Controller
{
    // Menampilkan daftar mahasiswa
    public function index()
    {
        $mahasiswas = Mahasiswa::latest()->paginate(5);
        return view('dashboard.mahasiswa.index', compact('mahasiswas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Tampilkan form entry data mahasiswa
        return view('dashboard.mahasiswa.create');
    }

    #-- Form Edit Data Maahasiswa
    public function store(Request $request)
    {
        $this->validate($request, [
            'nobp' =>  'required',
            'nama' =>  'required',
            'jk' =>  'required|max:1',
            'nohp' =>  'required',
            'alamat' =>  'required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            ]);
            
            //upload image
            $image = $request->file('image');
            $image->storeAs('public/mahasiswas', $image->hashName());
            
            $mahasiswa = Mahasiswa::create([
            'nobp' => $request->nobp,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,
            'image' => $image->hashName(),
            ]);
            
            if($mahasiswa){
            //redirect dengan pesan sukses
            return redirect()->route('mahasiswa.index')->with(['success' => 'Data Berhasil Disimpan!']);
            }else{
            //redirect dengan pesan error
            return redirect()->route('mahasiswa.index')->with(['error' => 'Data Gagal Disimpan!']);
            }            
    }

    
    public function show($id)
    {
        //
    }
    public function detail($slug)
    {
        $mahasiswa=Mahasiswa::where('slug',$slug)->first();
        // return view('folder.nama_file',['mahasiswa'=>$mahasiswa]);
        // atau
        return view('folder.nama_file',compact('mahasiswa'));

    }
   # Edit Data
    public function edit(Mahasiswa $mahasiswa)
    {
        //
        return view('dashboard.mahasiswa.edit', compact('mahasiswa'));
    }

    #-- proses update
    public function update(Request $request,Mahasiswa $mahasiswa)
    {
        // Validasi data yang diisikan
        $this->validate($request, [
            'nobp' =>  'required',
            'nama' =>  'required',
            'jk' =>  'required|max:1',
            'nohp' =>  'required',
            'alamat' =>  'required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            ]);
            
            //cari  data mahasiswa berdasarkan ID yang dipilih
            $mahasiswa = Mahasiswa::findOrFail($mahasiswa->id);
            #-- cek file image 
            if($request->file('image') == "") {
            $mahasiswa->update([
            'nobp' => $request->nobp,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat
            ]);
            
            } else {
            
            //hapus gambar lama didalam folder public
            Storage::disk('local')->delete('public/mahasiswas/'.$mahasiswa->image);
            
            //Mengganti gambar lama dengan gambar baru
            $image = $request->file('image');
            $image->storeAs('public/mahasiswas', $image->hashName());
            
            $mahasiswa->update([
            'nobp' => $request->nobp,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,
            'image' => $image->hashName()
            ]);
            # UPDATE MAHASISWAS SET NAMA='nama', jk='jk', nohp='nohp'
            # WHERE ID='ID'
            
            }
            
            if($mahasiswa){
            //redirect dengan pesan sukses
            return redirect()->route('mahasiswa.index')->with(['success' => 'Data Berhasil Diupdate!']);
            }else{
            //redirect dengan pesan error
            return redirect()->route('mahasiswa.index')->with(['error' => 'Data Gagal Diupdate!']);
            }
            
    }

   # -- Metode untuk menghapus data
   # -- ketika diklik tombol Hapus
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        Storage::delete($mahasiswa->image);
        $mahasiswa->delete();

        if($mahasiswa){
        //redirect dengan pesan sukses
        return redirect()->route('mahasiswa.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
        //redirect dengan pesan error
        return redirect()->route('mahasiswa.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
        }

    }

