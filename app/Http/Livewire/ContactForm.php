<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Contact;

class ContactForm extends Component
{
	public $nama;
	public $no_telepon;
	public $selected_id;
	public $mode_update = false;
	

	public function submit(){
		$data = $this->validate([
			'nama'=> 'required|min:6',
			'no_telepon'=>'required|min:12',
		]);

		Contact::create($data);

		$this->nama = null;
		$this->no_telepon = null;

		session()->flash('message', 'Data Berhasil Disimpan.');

		return redirect()->to('/');

	}

	public function edit($id){
		$record = Contact::findOrFail($id);

			$this->selected_id = $id;
			$this->nama = $record->nama;
			$this->no_telepon = $record->no_telepon;
			
			$this->mode_update = true;
	}
	
	public function update(){
		$this->validate([
			'selected_id'=>'required|numeric',
			'nama'=> 'required|min:6',
			'no_telepon'=>'required|min:12'
		]);
		if($this->selected_id){
		$record = Contact::find($this->selected_id);
		$record->update([
			'nama'=>$this->nama,
			'no_telepon'=>$this->no_telepon
		]);

		$this->nama = null;
		$this->no_telepon = null;

		$this->mode_update = false;
		
		session()->flash('message', 'Data Berhasil Diubah.');
		}

	}

	public function delete($id){
		if($id){
			$record = Contact::where('id', $id);
			$record->delete();

			session()->flash('message', 'Data Berhasil Dihapus.');
		}
	}

    public function render()
    {
    	$data = Contact::all();
        return view('livewire.contact-form', ['data'=>$data]);
    }
}
