<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Daerah;
use Livewire\Component;
use App\Models\Pelitadata;

class Pelitas extends Component
{
    public $pelitadata, $daerah;
    public $daerah_id;
    public $nama;
    public $mandarin;
    public $panggilan;
    public $jenis_kelamin;
    public $umur;
    public $alamat;
    public $kota;
    public $telepon;
    public $hp;
    public $tanggal_mohon_tao;
    public $sd3h;
    public $vegetarian;
    public $keterangan;

    public function resetInputFields()
    {
        $this->daerah_id = '';
        $this->nama = '';
        $this->mandarin = '';
        $this->panggilan = '';
        $this->jenis_kelamin = '';
        $this->umur = '';
        $this->alamat = '';
        $this->kota = '';
        $this->telepon = '';
        $this->hp = '';
        $this->tanggal_mohon_tao = '';
        $this->sd3h = '';
        $this->vegetarian = '';
        $this->keterangan = '';
    }

    protected function rules()
    {
        return [

            'daerah_id' => 'nullable',
            'nama' => 'nullable',
            'mandarin' => 'nullable',
            'panggilan' => 'nullable',
            'jenis_kelamin' => 'nullable',
            'umur' => 'nullable',
            'alamat' => 'nullable',
            'kota' => 'nullable',
            'telepon' => 'nullable',
            'hp' => 'nullable',
            'tanggal_mohon_tao' => 'nullable',
            'sd3h' => 'nullable',
            'vegetarian' => 'nullable',
            'keterangan' => 'nullable',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function store()
    {
        $validatedData = $this->validate();
        Pelitadata::create($validatedData);
        session()->flash('message', 'Data Created Succesfully');
        $this->resetInputFields();
        $this->resetValidation();
        $this->dispatchBrowserEvent('close-modal');
    }
    public function closeModal()
    {
        $this->resetInputFields();
    }


    public function mount()
    {
        $this->daerah = Daerah::all();
        $this->pelitadata = Pelitadata::orderBy('id', 'DESC')->get();
    }
    public function render()
    {
        $this->tanggal_mohon_tao = Carbon::now()->format('Y-m-d');
        $this->sd3h = 'Belum';
        $this->vegetarian = 'Belum';
        return view('livewire.pelitas');
    }
}
