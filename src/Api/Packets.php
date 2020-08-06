<?php


namespace Gentor\Olx\Api;

/**
 * Class Threads
 *
 * @package Gentor\Olx\Api
 */
class Packets extends ApiResource
{
    /**
     * {@inheritdoc}
     */
    public function getEndpoint()
    {
        return 'partner/packets';
    }

    /**
     *
     * @return array|mixed|null
     *
     * @throws OlxException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getByCategory(int $categoryId)
    {
        $data = [
            'category_id' => $categoryId,
//            'payment_method' => 'account',
        ];
        $response =  $this->client->request('GET', $this->getEndpoint(), $data);
        if(isset($response['data'])) {
            return $response['data'];
        }
        return $response;
    }

    /**
     * @param int $threadId
     * @param int $limit
     * @param int $offset
     *
     * @return array|null
     *
     * @throws OlxException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
//    public function getMessages(int $threadId, $limit = 0, $offset = 0)
//    {
//        $data = [];
//
//        if ($limit > 0) {
//            $data = [
//                'limit' => $limit,
//                'offset' => $offset
//            ];
//        }
//        return $this->request('GET', sprintf('%s/%d/messages', $this->getEndpoint(), $threadId), $data);
//    }
//
//    /**
//     * @param int $threadId
//     * @param int $messageId
//     *
//     * @return array|null
//     *
//     * @throws OlxException
//     * @throws \GuzzleHttp\Exception\GuzzleException
//     */
//    public function getMessage(int $threadId, int $messageId)
//    {
//        return $this->request('GET', sprintf('%s/%d/messages/%d', $this->getEndpoint(), $threadId, $messageId));
//    }

    /**
     * @param int $threadId
     * @param bool $isFavorite
     *
     * @return array|null
     *
     * @throws OlxException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
}
