<?php declare(strict_types=1);

namespace Indigerd\Repository\Example\Domain\Relation;

use Indigerd\Repository\Relation\Relation;
use Indigerd\Repository\Example\Domain\Model\ArticleCategory;

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
