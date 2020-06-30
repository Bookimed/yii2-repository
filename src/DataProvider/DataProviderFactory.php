<?php declare(strict_types=1);

namespace Bookimed\Repository\DataProvider;

use Bookimed\Repository\Repository;

class DataProviderFactory
{
    public function create(Repository $repository, array $conditions = [], $with = [], array $sortFields = [])
    {
        return new DataProvider($repository, $conditions, $with, $sortFields);
    }
}
