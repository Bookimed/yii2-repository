<?php declare(strict_types=1);

namespace Bookimed\Repository\Test\Fixture;

use Bookimed\Repository\Relation\Relation;

class ArticleCategoryRelation extends Relation
{
    public function __construct() {
        parent::__construct(
            'category',
            'category_id',
            'id',
            'article_categories',
            ArticleCategory::class,
            'inner'
        );
    }
}
