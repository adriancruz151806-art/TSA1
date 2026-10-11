<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TaskManagementSeeder extends Seeder
{
    public function run()
    {
        $today = date('Y-m-d');
        $createdAt = date('Y-m-d H:i:s');

        if ($this->db->table('tasks')->countAllResults() === 0) {
            $this->db->table('tasks')->insertBatch([
                ['title' => 'Review project priorities', 'status' => 'completed', 'task_date' => date('Y-m-d', strtotime('-2 days')), 'created_at' => $createdAt],
                ['title' => 'Organize workspace', 'status' => 'completed', 'task_date' => date('Y-m-d', strtotime('-1 day')), 'created_at' => $createdAt],
                ['title' => 'Plan the day', 'status' => 'completed', 'task_date' => $today, 'created_at' => $createdAt],
                ['title' => 'Finish the task dashboard', 'status' => 'pending', 'task_date' => $today, 'created_at' => $createdAt],
                ['title' => 'Reply to important emails', 'status' => 'in progress', 'task_date' => $today, 'created_at' => $createdAt],
                ['title' => 'Prepare meeting notes', 'status' => 'pending', 'task_date' => date('Y-m-d', strtotime('+1 day')), 'created_at' => $createdAt],
                ['title' => 'Review weekly progress', 'status' => 'pending', 'task_date' => date('Y-m-d', strtotime('+2 days')), 'created_at' => $createdAt],
                ['title' => 'Back up project files', 'status' => 'pending', 'task_date' => date('Y-m-d', strtotime('+4 days')), 'created_at' => $createdAt],
            ]);
        }

        if ($this->db->table('users')->countAllResults() === 0) {
            $this->db->table('users')->insert([
                'username'   => 'demo_user',
                'full_name'  => 'Alex Morgan',
                'email'      => 'alex.morgan@example.com',
                'created_at' => $createdAt,
            ]);
        }
    }
}
