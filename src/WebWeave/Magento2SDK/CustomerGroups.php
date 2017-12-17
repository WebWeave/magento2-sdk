<?php

namespace WebWeave\Magento2SDK;

class CustomerGroups
{
	/**
	 * @var $apiClient
	 */
	protected $apiClient;

	public function __construct(\WebWeave\Magento2SDK\ApiClient $apiClient)
	{
		$this->apiClient = $apiClient;
	}

	/**
	 * @param array $data
	 * @throws \Exception
	 * @return array
	 */
	public function createCustomerGroup(array $data)
	{
		try {
			$res = $this->apiClient->apiClient->post('customerGroups', ['body' => json_encode($data)]);

			return json_decode($res->getBody()->getContents());
		} catch (\Exception $exception) {
			throw $exception;
		}

	}

	/**
	 * @param $id
	 * @throws \Exception
	 * @return array
	 */
	public function getCustomerGroup($id)
	{
		try {
			$res = $this->apiClient->apiClient->get('customerGroups/'.$id);

			return json_decode($res->getBody()->getContents());
		} catch (\Exception $exception) {
			throw $exception;
		}

	}
}