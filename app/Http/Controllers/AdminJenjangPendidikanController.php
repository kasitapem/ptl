<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
#---- Panggil Model
use App\Models\Jenjangpendidikan;
#-- Autentikasi User
use Illuminate\Support\Facades\Auth;

class AdminJenjangPendidikanController extends Controller
{
    #-- Menampilkan data rumpun ilmu
    public function index()
    {
       
       $user = Auth::user();#-- pastikan sudah memanggil Facades/Auth;
       $jenjangpendidikans = Jenjangpendidikan::latest()->paginate(5);
        #-- Komdisiskan disini
         #-- cara menggunakan Polciy utk hak akses
        //  if ($user->can('view', $article)) {
        //     echo "Current logged in user is allowed to update the Article: {$article->id}";
        //   } else {
        //     echo 'Not Authorized.';
        //   }

        return view('dashboard.jenjangpendidikan.index', compact('jenjangpendidikans'));
    }

    #-- panggil form entry data rumpun ilmu/create.blade.php
    public function create()
    {
        $user = Auth::user();
        //  #-- Kondisikan disni cara menggunakan Polciy utk hak akses
        //  if ($user->can('view', $article)) {
        //     echo "Current logged in user is allowed to update the Article: {$article->id}";
        //   } else {
        //     echo 'Not Authorized.';
        //   }
        // exit;

         return view('dashboard.jenjangpendidikan.create');
        

    }
    #-- Simpan data jika diklim tombol Simpan
    public function store(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
            'kdjjgpendik' =>  'required',
            'nmjjgpendik' =>  'required',
            ]);
            
            $jenjangpendidikan = Jenjangpendidikan::create([
            'kdjjgpendik' => $request->kdjjgpendik,
            'nmjjgpendik' => $request->nmjjgpendik,
            ]);
            
            if($jenjangpendidikan){
            //redirect dengan pesan sukses
            return redirect()->route('jenjangpendidikan.index')->with(['success' => 'Data Berhasil Disimpan!']);
            }else{
            //redirect dengan pesan error
            return redirect()->route('jenjangpendidikan.index')->with(['error' => 'Data Gagal Disimpan!']);
            } 
    }
    # -- menampilkan informasi detail
    public function show($id)
    {
        //
    }
   # -- Tampilkan form dashboard/jenjangpendidikan/edit.blade.php
    public function edit(Jenjangpendidikan $jenjangpendidikan)
    {
        $user = Auth::user();
        return view('dashboard.jenjangpendidikan.edit', compact('jenjangpendidikan'));
    }
    #-- Proses update data
    public function update(Request $request, Jenjangpendidikan $jenjangpendidikan)
    {
        $user = Auth::user();
        $this->validate($request, [
            'kdjjgpendik' =>  'required',
            'nmjjgpendik' =>  'required',
            ]);
            $jenjangpendidikan->update([
            'kdjjgpendik' => $request->kdjjgpendik,
            'nmjjgpendik' => $request->nmjjgpendik,
            ]);
            
            if($jenjangpendidikan){
            //redirect dengan pesan sukses
            return redirect()->route('jenjangpendidikan.index')->with(['success' => 'Perubahan Data Berhasil Disimpan!']);
            }else{
            //redirect dengan pesan error
            return redirect()->route('jenjangpendidikan.index')->with(['error' => 'Perubahan Data Gagal Disimpan!']);
            } 
    }

    # -- Hapus data rumpun ilmu    
    public function destroy($id)
    {
        $user = Auth::user();
        $jenjangpendidikan = Jenjangpendidikan::findOrFail($id);
        $jenjangpendidikan->delete();
        if($jenjangpendidikan){
        //redirect dengan pesan sukses
        return redirect()->route('jenjangpendidikan.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
        //redirect dengan pesan error
        return redirect()->route('jenjangpendidikan.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
        }
}
