<?php

namespace Bookimed\Repository\Test\Fixture;

use Bookimed\Repository\Relation\RelationCollection;

class ArticleRelationCollection extends RelationCollection
{
    public function __construct(ArticleCategoryRelation $relation)
    {
        parent::__construct($relation);
    }
}
