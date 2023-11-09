<?php

namespace App\Livewire\Components;

use Illuminate\Support\Facades\Mail;

use Livewire\Component;

use App\Models\Task;

use App\Mail\CompletatedTaskMail;

class ConfirmButton extends Component
{

    public int $taskId;

    public function click() {

        $email = auth()->user()->email;

        $task = Task::where(['id' => $this->taskId])->first();

        $task->completated = 1;
        $task->save();

        Mail::to($email)
            ->send(new CompletatedTaskMail());

        return $this->redirect('/task-index');
    }

    public function render()
    {
        return view('livewire.components.confirm-button');
    }
}
