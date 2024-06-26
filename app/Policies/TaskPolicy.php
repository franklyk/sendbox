<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TaskPolicy
{
    public function edit(User $user, Task $task)
    {
        return $task->employer->user->is($user);
    }
    public function delete(User $user, Task $task)
    {
        return $task->employer->user->is($user);
    }
}
