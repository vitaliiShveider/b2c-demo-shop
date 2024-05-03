<?php

namespace Pyz\Zed\Category\Persistence\Propel\Mapper;

use Generated\Shared\Transfer\CategoryTransfer;
use Orm\Zed\Category\Persistence\SpyCategory;
use Spryker\Zed\Category\Persistence\Propel\Mapper\CategoryMapper as SprykerCategoryMapper;

class CategoryMapper extends SprykerCategoryMapper implements CategoryMapperInterface
{
    public function categoryToTransfer(SpyCategory $spyCategory): CategoryTransfer
    {
        return new CategoryTransfer();
    }
}
