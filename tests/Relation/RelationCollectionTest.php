<?php declare(strict_types=1);

namespace Bookimed\Repository\Test\Relation;

use Bookimed\Repository\Relation\Relation;
use PHPUnit\Framework\TestCase;
use Bookimed\Repository\Relation\RelationCollection;
use Bookimed\Repository\Example\Domain\Relation\ArticleCategoryRelation;

class RelationCollectionTest extends TestCase
{
    /** @var  RelationCollection */
    protected $collection;

    public function setUp(): void
    {
        $this->collection = new RelationCollection();
    }

    public function testAddRelation()
    {
        $relation = new ArticleCategoryRelation();
        $this->collection->addRelation($relation);
        $this->assertEquals($relation, $this->collection->getRelationByProperty($relation->getProperty()));
    }
}
