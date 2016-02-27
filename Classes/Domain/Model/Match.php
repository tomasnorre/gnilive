<?php
namespace Tnm\Gnilive\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Tomas Norre Mikkelsen <tomasnorre@gmail.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * Match
 */
class Match extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * matchType
     *
     * @var int
     */
    protected $matchType = 0;
    
    /**
     * score
     *
     * @var string
     */
    protected $score = '';
    
    /**
     * teeTime
     *
     * @var \DateTime
     */
    protected $teeTime = null;
    
    /**
     * playerOneTeamA
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Tnm\Gnilive\Domain\Model\Player>
     */
    protected $playerOneTeamA = null;
    
    /**
     * playerTwoTeamA
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Tnm\Gnilive\Domain\Model\Player>
     */
    protected $playerTwoTeamA = null;
    
    /**
     * playerOneTeamB
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Tnm\Gnilive\Domain\Model\Player>
     */
    protected $playerOneTeamB = null;
    
    /**
     * playerTwoTeamB
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Tnm\Gnilive\Domain\Model\Player>
     */
    protected $playerTwoTeamB = null;
    
    /**
     * Returns the matchType
     *
     * @return int $matchType
     */
    public function getMatchType()
    {
        return $this->matchType;
    }
    
    /**
     * Sets the matchType
     *
     * @param int $matchType
     * @return void
     */
    public function setMatchType($matchType)
    {
        $this->matchType = $matchType;
    }
    
    /**
     * Returns the score
     *
     * @return string $score
     */
    public function getScore()
    {
        return $this->score;
    }
    
    /**
     * Sets the score
     *
     * @param string $score
     * @return void
     */
    public function setScore($score)
    {
        $this->score = $score;
    }
    
    /**
     * Returns the teeTime
     *
     * @return \DateTime $teeTime
     */
    public function getTeeTime()
    {
        return $this->teeTime;
    }
    
    /**
     * Sets the teeTime
     *
     * @param \DateTime $teeTime
     * @return void
     */
    public function setTeeTime(\DateTime $teeTime)
    {
        $this->teeTime = $teeTime;
    }
    
    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }
    
    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->playerOneTeamA = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->playerTwoTeamA = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->playerOneTeamB = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->playerTwoTeamB = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    
    /**
     * Adds a Player
     *
     * @param \Tnm\Gnilive\Domain\Model\Player $playerOneTeamA
     * @return void
     */
    public function addPlayerOneTeamA(\Tnm\Gnilive\Domain\Model\Player $playerOneTeamA)
    {
        $this->playerOneTeamA->attach($playerOneTeamA);
    }
    
    /**
     * Removes a Player
     *
     * @param \Tnm\Gnilive\Domain\Model\Player $playerOneTeamAToRemove The Player to be removed
     * @return void
     */
    public function removePlayerOneTeamA(\Tnm\Gnilive\Domain\Model\Player $playerOneTeamAToRemove)
    {
        $this->playerOneTeamA->detach($playerOneTeamAToRemove);
    }
    
    /**
     * Returns the playerOneTeamA
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Tnm\Gnilive\Domain\Model\Player> $playerOneTeamA
     */
    public function getPlayerOneTeamA()
    {
        return $this->playerOneTeamA;
    }
    
    /**
     * Sets the playerOneTeamA
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Tnm\Gnilive\Domain\Model\Player> $playerOneTeamA
     * @return void
     */
    public function setPlayerOneTeamA(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $playerOneTeamA)
    {
        $this->playerOneTeamA = $playerOneTeamA;
    }
    
    /**
     * Adds a Player
     *
     * @param \Tnm\Gnilive\Domain\Model\Player $playerTwoTeamA
     * @return void
     */
    public function addPlayerTwoTeamA(\Tnm\Gnilive\Domain\Model\Player $playerTwoTeamA)
    {
        $this->playerTwoTeamA->attach($playerTwoTeamA);
    }
    
    /**
     * Removes a Player
     *
     * @param \Tnm\Gnilive\Domain\Model\Player $playerTwoTeamAToRemove The Player to be removed
     * @return void
     */
    public function removePlayerTwoTeamA(\Tnm\Gnilive\Domain\Model\Player $playerTwoTeamAToRemove)
    {
        $this->playerTwoTeamA->detach($playerTwoTeamAToRemove);
    }
    
    /**
     * Returns the playerTwoTeamA
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Tnm\Gnilive\Domain\Model\Player> $playerTwoTeamA
     */
    public function getPlayerTwoTeamA()
    {
        return $this->playerTwoTeamA;
    }
    
    /**
     * Sets the playerTwoTeamA
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Tnm\Gnilive\Domain\Model\Player> $playerTwoTeamA
     * @return void
     */
    public function setPlayerTwoTeamA(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $playerTwoTeamA)
    {
        $this->playerTwoTeamA = $playerTwoTeamA;
    }
    
    /**
     * Adds a Player
     *
     * @param \Tnm\Gnilive\Domain\Model\Player $playerOneTeamB
     * @return void
     */
    public function addPlayerOneTeamB(\Tnm\Gnilive\Domain\Model\Player $playerOneTeamB)
    {
        $this->playerOneTeamB->attach($playerOneTeamB);
    }
    
    /**
     * Removes a Player
     *
     * @param \Tnm\Gnilive\Domain\Model\Player $playerOneTeamBToRemove The Player to be removed
     * @return void
     */
    public function removePlayerOneTeamB(\Tnm\Gnilive\Domain\Model\Player $playerOneTeamBToRemove)
    {
        $this->playerOneTeamB->detach($playerOneTeamBToRemove);
    }
    
    /**
     * Returns the playerOneTeamB
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Tnm\Gnilive\Domain\Model\Player> $playerOneTeamB
     */
    public function getPlayerOneTeamB()
    {
        return $this->playerOneTeamB;
    }
    
    /**
     * Sets the playerOneTeamB
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Tnm\Gnilive\Domain\Model\Player> $playerOneTeamB
     * @return void
     */
    public function setPlayerOneTeamB(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $playerOneTeamB)
    {
        $this->playerOneTeamB = $playerOneTeamB;
    }
    
    /**
     * Adds a Player
     *
     * @param \Tnm\Gnilive\Domain\Model\Player $playerTwoTeamB
     * @return void
     */
    public function addPlayerTwoTeamB(\Tnm\Gnilive\Domain\Model\Player $playerTwoTeamB)
    {
        $this->playerTwoTeamB->attach($playerTwoTeamB);
    }
    
    /**
     * Removes a Player
     *
     * @param \Tnm\Gnilive\Domain\Model\Player $playerTwoTeamBToRemove The Player to be removed
     * @return void
     */
    public function removePlayerTwoTeamB(\Tnm\Gnilive\Domain\Model\Player $playerTwoTeamBToRemove)
    {
        $this->playerTwoTeamB->detach($playerTwoTeamBToRemove);
    }
    
    /**
     * Returns the playerTwoTeamB
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Tnm\Gnilive\Domain\Model\Player> $playerTwoTeamB
     */
    public function getPlayerTwoTeamB()
    {
        return $this->playerTwoTeamB;
    }
    
    /**
     * Sets the playerTwoTeamB
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Tnm\Gnilive\Domain\Model\Player> $playerTwoTeamB
     * @return void
     */
    public function setPlayerTwoTeamB(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $playerTwoTeamB)
    {
        $this->playerTwoTeamB = $playerTwoTeamB;
    }

}