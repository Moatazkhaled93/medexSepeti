<?php

namespace App\Repository\Eloquent;

use App\Factories\ModelFactory;
use App\Repository\Interfaces\EloquentRepositoryInterface;

abstract class EloquentRepository implements EloquentRepositoryInterface {

    protected $model;
    protected $modelFactory;

    public function __construct(ModelFactory $modelFactory) {
        $this->modelFactory = $modelFactory;
        $this->setModel();
    }

    public function all($columns = ['*']) {
        return $this->model->get($columns);
    }

    public function paginate($perPage = 15, $columns = ['*']) {
        return $this->model->paginate($perPage, $columns);
    }

    public function create(array $data) {
        return $this->model->create($data);
    }

    public function updateOrCreate(array $data, array $data2) {
        return $this->model->updateOrCreate($data, $data2);
    }

    public function update(array $data, $id, $attribute = "id") {
        return $this->model->find($id)->update($data);
    }

    public function delete($id) {
        return $this->model->destroy($id);
    }
    public function deleteWhere($where) {
        return $this->model->where($where)->delete();
    }

    public function limit($limit) {
        return $this->model->limit($limit)->get();
    }

    public function order($field, $sort) {
        return $this->model->orderBy($field, $sort);
    }

    public function count() {
        return $this->model->count();
    }

    public function find($id, $columns = ['*']) {
        return $this->model->find($id, $columns);
    }

    public function findWith($id, $with, $columns = ['*']) {
        return $this->model->with($with)->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = ['*']) {
        return $this->model->where($attribute, '=', $value)->first($columns);
    }

    private function setModel() {
        $this->model = $this->modelFactory->create($this->getModelName());
    }

    public function getModel() {
        return $this->model;
    }

}
