<?php

namespace Pyz\Zed\Category\Persistence\Propel\Mapper;

use Generated\Shared\Transfer\CategoryTransfer;
use Orm\Zed\Category\Persistence\SpyCategory;
use Spryker\Zed\Category\Persistence\Propel\Mapper\CategoryMapperInterface as SprykerCategoryMapperInterface;

interface CategoryMapperInterface extends SprykerCategoryMapperInterface
{
    public function categoryToTransfer(SpyCategory $spyCategory): CategoryTransfer;
}
