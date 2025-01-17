<?php

namespace Craue\FormFlowBundle\Tests\EventListener;

use Craue\FormFlowBundle\EventListener\FlowExpiredEventListener;
use Craue\FormFlowBundle\Tests\UnitTestCase;

/**
 * @group unit
 *
 * @author Christian Raue <christian.raue@gmail.com>
 * @copyright 2011-2022 Christian Raue
 * @license http://opensource.org/licenses/mit-license.php MIT License
 */
class FlowExpiredEventListenerTest extends UnitTestCase {

	use EventListenerWithTranslatorTestTrait;

	protected function getListener() {
		return new FlowExpiredEventListener();
	}

}
