<?php

namespace Craue\FormFlowBundle\Tests\IntegrationTestBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * @author Christian Raue <christian.raue@gmail.com>
 * @copyright 2011-2022 Christian Raue
 * @license http://opensource.org/licenses/mit-license.php MIT License
 */
class Issue64Data {

	/**
	 * @var Issue64SubData
	 * @Assert\NotNull(groups={"flow_issue64_step1", "flow_issue64_step2", "flow_issue64_step3"})
	 * @Assert\Valid(groups={"flow_issue64_step1", "flow_issue64_step2", "flow_issue64_step3"})
	 */
	public $sub;

}
