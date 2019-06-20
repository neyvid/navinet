<?php


namespace App\Repository\Contract;


abstract class BaseRepository
{
    protected $model;

    public function all(array $eagerLoadItems = [], $orderBy = null, $orderType = null)
    {
        if (!empty($eagerLoadItems)) {
            return $this->model::with($eagerLoadItems)->get();
        }
        if ($orderBy && $orderType != null) {
            return $this->model::orderBy($orderBy, $orderType)->get();
        }
        return $this->model::all();
    }

    public function create(array $data)
    {
        return $this->model::create($data);
    }

    public function find(int $id)
    {
        return $this->model::find($id);
    }

    public function update(int $id, array $data)
    {
        $item = $this->model::find($id);
        return $item->update($data);
    }

    public function delete(int $id)
    {
        $item = $this->model::find($id);
        return $item->delete();
    }

    public function deleteAll(array $items)
    {
        foreach ($items as $item) {
            $this->delete($item);
        }
    }

    public function findBy(array $criteria,string $opration='=',$single=true)
    {
        $query=$this->model::query();
        foreach ($criteria as $key=>$value){
            $query->where($key,$opration,$value);
        }
        if($single){
            return $query->first();
        }
        return $query->get();
    }

}