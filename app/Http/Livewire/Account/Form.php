<?php

namespace App\Http\Livewire\Account;

use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Form extends Component
{
    public $nama, $password, $email;
    use LivewireAlert;
    public function render()
    {
        return view('livewire.account.form');
    }

    public function tambah(){
        $this->validate([
            'nama' => 'required',
            'password' => 'required',
            'email' => 'required|email|unique:users,email',
        ]);
        $account = new User();
        $account->name = $this->nama;
        $account->password = \Hash::make($this->password);
        $account->email = $this->email;
        $account->save();
        $this->reset();
        $this->alert('success', 'Berhasil menambahkan akun');
    }
}
