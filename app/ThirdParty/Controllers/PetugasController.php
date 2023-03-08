<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Petugas;
class PetugasController extends BaseController{
    protected $petugas;

    function __construct()
    {
        $this->petugas = new Petugas();
    }
    public function index()
    {
        $data['petugas']= $this->petugas->findAll();
        return view('petugas_view',$data);
    }
    public function simpan()
    {
        $data= array(
            'nama_petugas'=>$this->request->getPost('nama_petugas'),
            'username'=>$this->request->getPost('username'),
            'password'=>password_hash($this->request->getPost('password')."",PASSWORD_DEFAULT),
            'telp'=>$this->request->getPost('telp'),
            'level'=>$this->request->getPost('level'),
        );
        $this->petugas->insert($data);
        session()->setFlashdata("message","Data berhasil disimpan");
        return redirect('petugas');
    }
    public function edit($id)
    {
        $data = array(
            'nama_petugas'=>$this->request->getPost('nama_petugas'),
            'username'=>$this->request->getPost('username'),
            'password'=>password_hash($this->request->getPost('password')."",PASSWORD_DEFAULT),
            'telp'=>$this->request->getPost('telp'),
            'level'=>$this->request->getPost('level'),
        );
        $this->petugas->update($id,$data);
        session()->setFlashdata("message","Data berhasil disimpan");
        return redirect('petugas');
    }
    public function delete($id)
    {
        $this->petugas->delete($id);
        session()->setFlashdata("message","Data berhasil dihapus");
        return redirect('petugas');
    }

}