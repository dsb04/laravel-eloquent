<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class ClientRepository extends BaseRepository
{
    public function modelClient()
    {
        return 'App/Models/Client';
    }
}