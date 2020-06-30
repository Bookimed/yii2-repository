<?php declare(strict_types=1);

namespace Bookimed\Repository\Query;

use yii\mongodb\Query;

class MongoQueryFactory
{
    public function create(): Query
    {
        return new Query();
    }
}
