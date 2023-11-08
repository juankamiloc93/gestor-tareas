<?php

namespace App\Livewire\Forms;

use Livewire\Component;

use App\Models\Task;

class TaskForm extends Component
{

    public string $title = '';

    public string $description =  '';

    public string $dueDate = '';


    public function submitForm(){   
        
        $user_id = auth()->user()->id;

        $task = new Task();

        $task->user_id = $user_id;
        $task->title = $this->title;
        $task->description = $this->description;
        $task->due_date = $this->dueDate;
        $task->completated = 0;

        $task->save();

        session()->flash('flash.banner', "Tarea creada! ");

        return $this->redirect('/task-index');

    }
    
    public function render()
    {
        return view('livewire.forms.task-form');
    }
}
