<?php

namespace Gentor\Olx\Api;

/**
 * Class Cities
 *
 * @package Gentor\Olx\Api
 */
class Regions extends ApiResource
{
    /**
     * {@inheritdoc}
     */
    public function getEndpoint()
    {
        return 'partner/regions';
    }

    /**
     * @param int $limit
     * @param int $offset
     * @return array|null
     *
     * @throws OlxException
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list($limit = 0, $offset = 0)
    {
        if ($limit > 0) {
            return $this->getWithLimit($limit, $offset);
        }

        return $this->getAll();
    }
}
