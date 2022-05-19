<?php 
 
namespace App\Repositories;
 
use App\Models\User;
 
class TaskRepository
{
    /**
     * 
     * 指定ユーザーの全タスク取得
     * 
     * @param User $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return $user->tasks()
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}