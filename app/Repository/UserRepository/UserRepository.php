<?php


namespace App\Repository\UserRepository;


use App\Models\User;
use App\Repository\Contract\BaseRepository;

class UserRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model=User::class;
    }

}