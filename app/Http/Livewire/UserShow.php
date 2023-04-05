<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class UserShow extends Component
{
    use WithPagination,WithFileUploads;
    protected $paginationTheme = 'tailwind';
 
    public $name, $email, $password,$user_picture, $user_id;
    public $search = '';
 
    private function resetInputFields(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function saveUser()
    {
        dd('ok');
        $validatedDate = $this->validate([
            'name' => 'required|string|min:6',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
            'user_picture' => 'required'
        ]);
        User::create($validatedDate);
        session()->flash('message', 'User Created Successfully.');
        $this->resetInputFields();
    }

    public function closeModal()
    {
        $this->resetInputFields();
    }
    
    public function render()
    {
        $users=User::where('name', 'LIKE', '%' . $this->search . '%')
        ->orWhere('email', 'LIKE', '%' . $this->search . '%')
        ->paginate(10);
        return view('livewire.user-show',compact('users'));
    }
}
