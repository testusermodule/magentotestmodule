<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace TestNameSpace\Migration\Model;

class TestManagement implements \TestNameSpace\Migration\Api\TestManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function getTest($param)
    {
        return 'hello api GET return the $param ' . $param;
    }
}

