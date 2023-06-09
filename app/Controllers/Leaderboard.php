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

    public function scorepanel()
    {
        return view('scorepanel');
    }
    
    public function addtoscore()
    {
        $LeaderboardModel = new LeaderboardModel();
        $teamcode = $this->request->getPost('teamcode');
        $pointsawarded = $this->request->getPost('pointsawarded');
       
        $LeaderboardModel->set('score', 'score + ' . $LeaderboardModel->escape($pointsawarded), FALSE)
            ->where('teamcode', $teamcode)
            ->update(); 
    }


}