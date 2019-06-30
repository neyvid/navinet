<?php


namespace App\Repository\CategoryRepository;


use App\Models\Category\Category;
use App\Repository\Contract\BaseRepository;

class CategoryRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model=Category::class;
    }
}