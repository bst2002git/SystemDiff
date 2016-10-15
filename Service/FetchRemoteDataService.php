<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 */

namespace Magenerds\SystemConfigDiff\Service;

use Magenerds\SystemConfigDiff\Api\Service\FetchRemoteDataServiceInterface;
use Magenerds\SystemConfigDiff\Remote\ClientInterface;

class FetchRemoteDataService implements FetchRemoteDataServiceInterface
{
    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @return array
     */
    public function fetch()
    {
        return [];
    }
}