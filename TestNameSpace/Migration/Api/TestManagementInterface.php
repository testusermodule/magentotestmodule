<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace TestNameSpace\Migration\Api;

interface TestManagementInterface
{

    /**
     * GET for Test api
     * @param string $param
     * @return string
     */
    public function getTest($param);
}

