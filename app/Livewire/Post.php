<?php

namespace App\Livewire;

use App\Models\Pegawai;
use Livewire\Component;

class Post extends Component
{
    public $title = 'Data pegawai';
    public $pegawai;
    public $isOpen = false;
    public $id, $nama, $email, $jabatan;

    public function render()
    {
        $this->pegawai = Pegawai::all();
        return view('livewire.post');
    }

    function create()
    {
        $this->isOpen = true;
    }

    function add()
    {
        $this->validate(
            [
                'nama' => 'required',
                'email' => 'required|email|unique:pegawai,email',
                'jabatan' => 'required',
            ],
            [
                'nama.required' => 'Nama tidak boleh kosong',
                'email.required' => 'Email tidak boleh kosong',
                'email.email' => 'Email anda tidak valid',
                'email.unique' => 'Email sudah terdaftar',
                'jabatan.required' => 'Jabatan tidak boleh kosong',
            ]
        );

        $tambah = new Pegawai();
        $tambah->nama = $this->nama;
        $tambah->email = $this->email;
        $tambah->jabatan = $this->jabatan;
        $tambah->save();
        session()->flash('sukses', 'Data berhasil ditambah');
        return $this->redirect('/', navigate: true);
    }

    function edit($id)
    {
        $pegawai = pegawai::find($id);
        $this->id = $pegawai->id;
        $this->nama = $pegawai->nama;
        $this->email = $pegawai->email;
        $this->jabatan = $pegawai->jabatan;
        $this->isOpen = true;
    }

    function actedit()
    {
        $pegawai = Pegawai::find($this->id);
        $pegawai->nama = $this->nama;
        $pegawai->email = $this->email;
        $pegawai->jabatan = $this->jabatan;
        $pegawai->update();
        session()->flash('sukses', 'Data berhasil diubah');
        return $this->redirect('/', navigate: true);
    }

    function hapus($id)
    {
        $pegawai = pegawai::find($id);
        $pegawai->delete();
        session()->flash('sukses', 'Data berhasil dihapus');
        return $this->redirect('/', navigate: true);
    }
}
