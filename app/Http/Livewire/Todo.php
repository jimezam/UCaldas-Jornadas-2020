<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Task;

class Todo extends Component
{
    public $name;

    public function addTask()
    {
        Task::create([
            'description' => $this->name
        ]);

        $this->name = "";

        session()->flash('information', '¡Tarea agregada!');
    }

    public function removeAllTasks()
    {  
        Task::truncate();
        
        session()->flash('information', '¡Lista reiniciada!');
    }

    public function removeTask($id)
    {
        Task::destroy($id);
        
        session()->flash('information', '¡Tarea removida!');
    }

    public function render()
    {
        return view('livewire.todo', [
            'tasks' => Task::all()
        ]);
    }
}
