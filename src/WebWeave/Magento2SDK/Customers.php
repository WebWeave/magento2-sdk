<?php

namespace WebWeave\Magento2SDK;

class Customers
{
	/**
	 * @var $apiClient
	 */
	protected $apiClient;

	/**
	 * Customers constructor.
	 * @param ApiClient $apiClient
	 */
	public function __construct(\WebWeave\Magento2SDK\ApiClient $apiClient)
	{
		$this->apiClient = $apiClient;
	}

	/**
	 * @param array $data
	 * @return array
	 * @throws \Exception
	 */
	public function createCustomer(array $data)
	{
		try {
			$res = $this->apiClient->apiClient->post('customers', ['body' => json_encode($data)]);

			return json_decode($res->getBody()->getContents());
		} catch (\Exception $exception) {
			throw $exception;
		}
	}

	/**
	 * @param $id
	 * @return array
	 * @throws \Exception
	 */
	public function getCustomer($id)
	{
		try {
			$res = $this->apiClient->apiClient->get('customers/'.$id);

			return json_decode($res->getBody()->getContents());
		} catch (\Exception $exception) {
			throw $exception;
		}
	}

}