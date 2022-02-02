<?php

namespace App\Repositories;

use Prettus\Repository\Lravel\BaseRepository;

class PostRepository extends BaseRepository
{
    public function model()

    {
        return 'App\Models\BillRepository';
    }
}