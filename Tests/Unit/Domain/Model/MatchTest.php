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
 * Test case for class \Tnm\Gnilive\Domain\Model\Match.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Tomas Norre Mikkelsen <tomasnorre@gmail.com>
 */
class MatchTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \Tnm\Gnilive\Domain\Model\Match
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \Tnm\Gnilive\Domain\Model\Match();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getMatchTypeReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setMatchTypeForIntSetsMatchType()
	{	}

	/**
	 * @test
	 */
	public function getTeeTimeReturnsInitialValueForDateTime()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getTeeTime()
		);
	}

	/**
	 * @test
	 */
	public function setTeeTimeForDateTimeSetsTeeTime()
	{
		$dateTimeFixture = new \DateTime();
		$this->subject->setTeeTime($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'teeTime',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCurrentHoleReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getCurrentHole()
		);
	}

	/**
	 * @test
	 */
	public function setCurrentHoleForStringSetsCurrentHole()
	{
		$this->subject->setCurrentHole('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'currentHole',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getScoreReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getScore()
		);
	}

	/**
	 * @test
	 */
	public function setScoreForStringSetsScore()
	{
		$this->subject->setScore('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'score',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPlayerOneTeamAReturnsInitialValueForPlayer()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getPlayerOneTeamA()
		);
	}

	/**
	 * @test
	 */
	public function setPlayerOneTeamAForPlayerSetsPlayerOneTeamA()
	{
		$playerOneTeamAFixture = new \Tnm\Gnilive\Domain\Model\Player();
		$this->subject->setPlayerOneTeamA($playerOneTeamAFixture);

		$this->assertAttributeEquals(
			$playerOneTeamAFixture,
			'playerOneTeamA',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPlayerTwoTeamAReturnsInitialValueForPlayer()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getPlayerTwoTeamA()
		);
	}

	/**
	 * @test
	 */
	public function setPlayerTwoTeamAForPlayerSetsPlayerTwoTeamA()
	{
		$playerTwoTeamAFixture = new \Tnm\Gnilive\Domain\Model\Player();
		$this->subject->setPlayerTwoTeamA($playerTwoTeamAFixture);

		$this->assertAttributeEquals(
			$playerTwoTeamAFixture,
			'playerTwoTeamA',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPlayerOneTeamBReturnsInitialValueForPlayer()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getPlayerOneTeamB()
		);
	}

	/**
	 * @test
	 */
	public function setPlayerOneTeamBForPlayerSetsPlayerOneTeamB()
	{
		$playerOneTeamBFixture = new \Tnm\Gnilive\Domain\Model\Player();
		$this->subject->setPlayerOneTeamB($playerOneTeamBFixture);

		$this->assertAttributeEquals(
			$playerOneTeamBFixture,
			'playerOneTeamB',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPlayerTwoTeamBReturnsInitialValueForPlayer()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getPlayerTwoTeamB()
		);
	}

	/**
	 * @test
	 */
	public function setPlayerTwoTeamBForPlayerSetsPlayerTwoTeamB()
	{
		$playerTwoTeamBFixture = new \Tnm\Gnilive\Domain\Model\Player();
		$this->subject->setPlayerTwoTeamB($playerTwoTeamBFixture);

		$this->assertAttributeEquals(
			$playerTwoTeamBFixture,
			'playerTwoTeamB',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMatchTeamAReturnsInitialValueForTeam()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getMatchTeamA()
		);
	}

	/**
	 * @test
	 */
	public function setMatchTeamAForTeamSetsMatchTeamA()
	{
		$matchTeamAFixture = new \Tnm\Gnilive\Domain\Model\Team();
		$this->subject->setMatchTeamA($matchTeamAFixture);

		$this->assertAttributeEquals(
			$matchTeamAFixture,
			'matchTeamA',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMatchTeamBReturnsInitialValueForTeam()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getMatchTeamB()
		);
	}

	/**
	 * @test
	 */
	public function setMatchTeamBForTeamSetsMatchTeamB()
	{
		$matchTeamBFixture = new \Tnm\Gnilive\Domain\Model\Team();
		$this->subject->setMatchTeamB($matchTeamBFixture);

		$this->assertAttributeEquals(
			$matchTeamBFixture,
			'matchTeamB',
			$this->subject
		);
	}
}
