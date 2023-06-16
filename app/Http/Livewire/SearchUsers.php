<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchUsers extends Component {
    public $search = null;

    public function render() {
        $users = User::query()
            ->when(!is_null($this->search), fn($query) => $query->where('name', 'LIKE', "%{$this->search}%"))
            ->get();

        return view('livewire.search-users', compact('users'));
    }
}
