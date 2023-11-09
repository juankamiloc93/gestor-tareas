<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

use App\Models\Task;
use App\Mail\CreatedTaskMail;

class TaskForm extends Component
{

    public string $title = '';

    public string $description =  '';

    public string $dueDate = '';

    protected $rules = [
        'title' => 'required|min:6|max:50',
        'description' => 'required|min:12|max:100',
        'dueDate' => 'required'
    ];


    public function submitForm(){  
        
        $this->validate();
        
        $user_id = auth()->user()->id;
        $email = auth()->user()->email;

        $task = new Task();

        $task->user_id = $user_id;
        $task->title = $this->title;
        $task->description = $this->description;
        $task->due_date = $this->dueDate;
        $task->completated = 0;

        $task->save();

        Mail::to($email)
            ->send(new CreatedTaskMail());
   
        return $this->redirect('/task-index');

    }
    
    public function render()
    {
        return view('livewire.forms.task-form');
    }
}
