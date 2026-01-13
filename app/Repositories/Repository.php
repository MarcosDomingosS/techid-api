<?php

namespace App\Repositories;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

/**
 * @template T of Model
 */
abstract class Repository {
    /**
     * @var class-string<T>
     */

    protected string $model;

    /**
     * @return T|null
     */

    public function find(int $id, $columns = ["*"]){
        return $this->model::find($id, $columns);
    }

    public function all($columns = ["*"]){
        return $this->model::all($columns);
    }

    public function create(Array $attributes){
        return DB::transaction(function() use ($attributes) {
            return $this->model::create($attributes);
        });
    }

    public function update(Model $model, Array $attributes, Array $options = []){
        $model->update($attributes, $options);
        return $model;
    }

    public function delete(Model $model){
        $model->delete();
    }
}