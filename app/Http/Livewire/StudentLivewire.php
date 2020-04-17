<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Student;

class StudentLivewire extends Component
{
    use WithPagination;

    protected $listeners = [
        'studentAdded',
    ];

    public function studentAdded()
    {
        # code...
    }

    public function render()
    {
        return view('livewire.student-livewire', [
            'students' => Student::paginate(5),
        ]);
    }
}
