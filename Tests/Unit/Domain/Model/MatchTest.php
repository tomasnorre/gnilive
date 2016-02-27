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
	public function getPlayerOneTeamAReturnsInitialValueForPlayer()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getPlayerOneTeamA()
		);
	}

	/**
	 * @test
	 */
	public function setPlayerOneTeamAForObjectStorageContainingPlayerSetsPlayerOneTeamA()
	{
		$playerOneTeamA = new \Tnm\Gnilive\Domain\Model\Player();
		$objectStorageHoldingExactlyOnePlayerOneTeamA = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOnePlayerOneTeamA->attach($playerOneTeamA);
		$this->subject->setPlayerOneTeamA($objectStorageHoldingExactlyOnePlayerOneTeamA);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOnePlayerOneTeamA,
			'playerOneTeamA',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addPlayerOneTeamAToObjectStorageHoldingPlayerOneTeamA()
	{
		$playerOneTeamA = new \Tnm\Gnilive\Domain\Model\Player();
		$playerOneTeamAObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$playerOneTeamAObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($playerOneTeamA));
		$this->inject($this->subject, 'playerOneTeamA', $playerOneTeamAObjectStorageMock);

		$this->subject->addPlayerOneTeamA($playerOneTeamA);
	}

	/**
	 * @test
	 */
	public function removePlayerOneTeamAFromObjectStorageHoldingPlayerOneTeamA()
	{
		$playerOneTeamA = new \Tnm\Gnilive\Domain\Model\Player();
		$playerOneTeamAObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$playerOneTeamAObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($playerOneTeamA));
		$this->inject($this->subject, 'playerOneTeamA', $playerOneTeamAObjectStorageMock);

		$this->subject->removePlayerOneTeamA($playerOneTeamA);

	}

	/**
	 * @test
	 */
	public function getPlayerTwoTeamAReturnsInitialValueForPlayer()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getPlayerTwoTeamA()
		);
	}

	/**
	 * @test
	 */
	public function setPlayerTwoTeamAForObjectStorageContainingPlayerSetsPlayerTwoTeamA()
	{
		$playerTwoTeamA = new \Tnm\Gnilive\Domain\Model\Player();
		$objectStorageHoldingExactlyOnePlayerTwoTeamA = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOnePlayerTwoTeamA->attach($playerTwoTeamA);
		$this->subject->setPlayerTwoTeamA($objectStorageHoldingExactlyOnePlayerTwoTeamA);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOnePlayerTwoTeamA,
			'playerTwoTeamA',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addPlayerTwoTeamAToObjectStorageHoldingPlayerTwoTeamA()
	{
		$playerTwoTeamA = new \Tnm\Gnilive\Domain\Model\Player();
		$playerTwoTeamAObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$playerTwoTeamAObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($playerTwoTeamA));
		$this->inject($this->subject, 'playerTwoTeamA', $playerTwoTeamAObjectStorageMock);

		$this->subject->addPlayerTwoTeamA($playerTwoTeamA);
	}

	/**
	 * @test
	 */
	public function removePlayerTwoTeamAFromObjectStorageHoldingPlayerTwoTeamA()
	{
		$playerTwoTeamA = new \Tnm\Gnilive\Domain\Model\Player();
		$playerTwoTeamAObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$playerTwoTeamAObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($playerTwoTeamA));
		$this->inject($this->subject, 'playerTwoTeamA', $playerTwoTeamAObjectStorageMock);

		$this->subject->removePlayerTwoTeamA($playerTwoTeamA);

	}

	/**
	 * @test
	 */
	public function getPlayerOneTeamBReturnsInitialValueForPlayer()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getPlayerOneTeamB()
		);
	}

	/**
	 * @test
	 */
	public function setPlayerOneTeamBForObjectStorageContainingPlayerSetsPlayerOneTeamB()
	{
		$playerOneTeamB = new \Tnm\Gnilive\Domain\Model\Player();
		$objectStorageHoldingExactlyOnePlayerOneTeamB = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOnePlayerOneTeamB->attach($playerOneTeamB);
		$this->subject->setPlayerOneTeamB($objectStorageHoldingExactlyOnePlayerOneTeamB);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOnePlayerOneTeamB,
			'playerOneTeamB',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addPlayerOneTeamBToObjectStorageHoldingPlayerOneTeamB()
	{
		$playerOneTeamB = new \Tnm\Gnilive\Domain\Model\Player();
		$playerOneTeamBObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$playerOneTeamBObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($playerOneTeamB));
		$this->inject($this->subject, 'playerOneTeamB', $playerOneTeamBObjectStorageMock);

		$this->subject->addPlayerOneTeamB($playerOneTeamB);
	}

	/**
	 * @test
	 */
	public function removePlayerOneTeamBFromObjectStorageHoldingPlayerOneTeamB()
	{
		$playerOneTeamB = new \Tnm\Gnilive\Domain\Model\Player();
		$playerOneTeamBObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$playerOneTeamBObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($playerOneTeamB));
		$this->inject($this->subject, 'playerOneTeamB', $playerOneTeamBObjectStorageMock);

		$this->subject->removePlayerOneTeamB($playerOneTeamB);

	}

	/**
	 * @test
	 */
	public function getPlayerTwoTeamBReturnsInitialValueForPlayer()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getPlayerTwoTeamB()
		);
	}

	/**
	 * @test
	 */
	public function setPlayerTwoTeamBForObjectStorageContainingPlayerSetsPlayerTwoTeamB()
	{
		$playerTwoTeamB = new \Tnm\Gnilive\Domain\Model\Player();
		$objectStorageHoldingExactlyOnePlayerTwoTeamB = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOnePlayerTwoTeamB->attach($playerTwoTeamB);
		$this->subject->setPlayerTwoTeamB($objectStorageHoldingExactlyOnePlayerTwoTeamB);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOnePlayerTwoTeamB,
			'playerTwoTeamB',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addPlayerTwoTeamBToObjectStorageHoldingPlayerTwoTeamB()
	{
		$playerTwoTeamB = new \Tnm\Gnilive\Domain\Model\Player();
		$playerTwoTeamBObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$playerTwoTeamBObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($playerTwoTeamB));
		$this->inject($this->subject, 'playerTwoTeamB', $playerTwoTeamBObjectStorageMock);

		$this->subject->addPlayerTwoTeamB($playerTwoTeamB);
	}

	/**
	 * @test
	 */
	public function removePlayerTwoTeamBFromObjectStorageHoldingPlayerTwoTeamB()
	{
		$playerTwoTeamB = new \Tnm\Gnilive\Domain\Model\Player();
		$playerTwoTeamBObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$playerTwoTeamBObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($playerTwoTeamB));
		$this->inject($this->subject, 'playerTwoTeamB', $playerTwoTeamBObjectStorageMock);

		$this->subject->removePlayerTwoTeamB($playerTwoTeamB);

	}
}
