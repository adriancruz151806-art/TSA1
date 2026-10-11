<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'status', 'task_date', 'created_at'];
    protected $useTimestamps = false;

    /**
     * @return array<int, array<string, mixed>>
     */
    public function findForDate(string $date): array
    {
        return $this->where('task_date', $date)
            ->orderBy('id', 'ASC')
            ->findAll();
    }
}
