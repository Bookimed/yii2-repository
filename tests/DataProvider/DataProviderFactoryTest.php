<?php declare(strict_types=1);

namespace Bookimed\Repository\Test\DataProvider;

use Bookimed\Repository\Repository;
use Bookimed\Repository\DataProvider\DataProvider;
use Bookimed\Repository\DataProvider\DataProviderFactory;
use PHPUnit\Framework\TestCase;

class DataProviderFactoryTest extends TestCase
{
    protected $factory;

    public function setUp(): void
    {
        $this->factory = new DataProviderFactory();
    }

    public function testCreate()
    {
        $repository = $this->getMockBuilder(Repository::class)->disableOriginalConstructor()->getMock();
        $this->assertInstanceOf(DataProvider::class, $this->factory->create($repository));
    }
}
