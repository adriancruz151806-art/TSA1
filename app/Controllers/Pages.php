<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{
    public function landing(): string
    {
        $tasks = (new TaskModel())->findForDate(date('Y-m-d'));

        return view('pages/landing', ['tasks' => $tasks]);
    }

    public function profile(): string
    {
        $user = (new UserModel())->first();

        if ($user === null) {
            throw PageNotFoundException::forPageNotFound('The demo user profile is unavailable.');
        }

        return view('pages/profile', ['user' => $user]);
    }

    public function about(): string
    {
        return view('pages/about');
    }
}
