<?php

declare(strict_types=1);

/**
 * @copyright   Copyright (c) 2017 gameeapp.com <hello@gameeapp.com>
 * @author      Pavel Janda <pavel@gameeapp.com>
 * @package     Gamee
 */

namespace Gamee\RabbitMQ\Producer;

use Gamee\RabbitMQ\Connection\Connection;

final class Producer
{

	const DELIVERY_MODE_NON_PERSISTENT = 1;
	const DELIVERY_MODE_PERSISTENT = 2;

	/**
	 * @var Connection
	 */
	private $connection;

	/**
	 * @todo Exchange object
	 * @var array
	 */
	private $exchange;

	/**
	 * @todo Queue object
	 * @var array
	 */
	private $queue;

	/**
	 * @var string
	 */
	private $contentType;

	/**
	 * @var string
	 */
	private $deliveryMode;



	public function __construct(
		Connection $connection,
		$exchange,
		$queue,
		$contentType,
		$deliveryMode
	) {
		$this->connection = $connection;
		$this->exchange = $exchange;
		$this->queue = $queue;
		$this->contentType = $contentType;
		$this->deliveryMode = $deliveryMode;
	}


	public function publish(): void
	{
		$this->connection->queueDeclare();
	}

}
