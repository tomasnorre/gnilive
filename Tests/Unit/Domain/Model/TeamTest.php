<?php

namespace Tnm\Gnilive\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 Tomas Norre Mikkelsen <tomasnorre@gmail.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \Tnm\Gnilive\Domain\Model\Team.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Tomas Norre Mikkelsen <tomasnorre@gmail.com>
 */
class TeamTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \Tnm\Gnilive\Domain\Model\Team
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \Tnm\Gnilive\Domain\Model\Team();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTeamNameReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTeamName()
		);
	}

	/**
	 * @test
	 */
	public function setTeamNameForStringSetsTeamName()
	{
		$this->subject->setTeamName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'teamName',
			$this->subject
		);
	}
}
