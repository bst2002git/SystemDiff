<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 */

namespace Magenerds\SystemDiff\Api\Service;

/**
 * Interface PerformSystemDiffServiceInterface
 * @package Magenerds\SystemDiff\Api\Service
 */
interface PerformSystemDiffServiceInterface
{
    /**
     * @return bool
     */
    public function performDiff();
}