<?php

namespace App\Controllers;
use App\Models\LeaderboardModel;

class Leaderboard extends BaseController
{
    public function getleaderboard()
    {
        $LeaderboardModel = new LeaderboardModel();
        $response = $LeaderboardModel->findAll();
        return $this->response->setJSON($response);
    }
}