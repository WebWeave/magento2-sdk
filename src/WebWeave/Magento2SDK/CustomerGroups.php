<?php

namespace WebWeave\Magento2SDK;

class CustomerGroups
{
	/**
	 * @var $apiClient
	 */
	protected $apiClient;

	/**
	 * CustomerGroups constructor.
	 * @param ApiClient $apiClient
	 */
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

	/**
	 * @param $id
	 * @throws \Exception
	 * @return boolean
	 */
	public function deleteCustomerGroup($id)
	{
		try {
			$res = $this->apiClient->apiClient->delete('customerGroups/'.$id);

			return json_decode($res->getBody()->getContents());
		} catch (\Exception $exception) {
			throw $exception;
		}
	}

	/**
	 * @param $id
	 * @param array $data
	 * @throws \Exception
	 * @return array
	 */
	public function updateCustomerGroup($id, array $data)
	{
		try {
			$res = $this->apiClient->apiClient->put('customerGroups/'.$id, ['body' => json_encode($data)]);

			return json_decode($res->getBody()->getContents());
		} catch (\Exception $exception) {
			throw $exception;
		}
	}

	/**
	 * @param array $data
	 * @return mixed
	 * @throws \Exception
	 */
	public function searchCustomerGroup(array $data)
	{
		//TODO Create search method
		return "Not ready yet";
		try {
			$res = $this->apiClient->apiClient->get('customerGroups/search');

			return json_decode($res->getBody()->getContents());
		} catch (\Exception $exception) {
			throw $exception;
		}
	}

}