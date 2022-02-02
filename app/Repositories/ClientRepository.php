<?php

namespace App\Repositories;

use Prettus\Repository\Laravel\BaseRepository;

class PostRepository extends BaseRepository
{
    public function model()

    {
        return 'App\Models\ClientRepository';
    }
}