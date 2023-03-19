<?php

namespace App\QueryBuilders;

use App\Models\Drug;
use App\QueryBuilders\QueryBuilder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

final class DrugsQueryBuilder extends QueryBuilder
{
    public Builder $model;

    public function __construct()
    {
        $this->model = Drug::query();
    }

    public function getAll(): Collection
    {
        return $this->model->get();
    }

    public function getDrugById(int $id): Collection
    {
        return Drug::query()->where('id', $id)->get();
    }

    public function getDrugsWithPagination(int $quantity = 10): LengthAwarePaginator
    {
        return $this->model->paginate($quantity);
    }
}
