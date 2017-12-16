<?php

namespace WebWeave\Magento2SDK;

use GuzzleHttp\Client;

abstract class AbstractApiClient
{
	/**
	 *
	 * @var $API_URL
	 */
	protected $API_URL = '';
	/**
	 * @var $apiClient
	 */
	protected $apiClient;

	/**
	 * @var $userName
	 */
	protected $userName;

	/**
	 * @var $password
	 */
	protected $password;

	/**
	 * @var $token
	 */
	protected $token;

	/**
	 * AbstractBridgeClient constructor.
	 * @param $API_URL
	 * @param $userName
	 * @param $password
	 */
	public function __construct($API_URL, $userName, $password)
	{
		$this->API_URL = preg_replace('{/$}', '', $API_URL) . '/rest/default/V1/';
		$this->userName = $userName;
		$this->password = $password;

		$this->apiClient = new Client(['base_uri' => $this->API_URL, 'headers' => [ 'Content-Type' => 'application/json' ]]);
	}

	/**
	 * @return string
	 * @throws \Exception
	 */
	public function getToken()
	{
		try {
			$req = $this->apiClient->post('integration/admin/token', ['body' => json_encode(
				[
					'username' => $this->userName,
					'password' => $this->password
				]
			)]);

			$this->token = str_replace('"', "", $req->getBody()->getContents());

			return $this->token;

		} catch (\Exception $exception)
		{
			throw $exception;
		}
	}

}