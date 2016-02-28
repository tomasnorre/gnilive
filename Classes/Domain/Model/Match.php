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
     * @var \Tnm\Gnilive\Domain\Model\Player
     */
    protected $playerOneTeamA = null;
    
    /**
     * playerTwoTeamA
     *
     * @var \Tnm\Gnilive\Domain\Model\Player
     */
    protected $playerTwoTeamA = null;
    
    /**
     * playerOneTeamB
     *
     * @var \Tnm\Gnilive\Domain\Model\Player
     */
    protected $playerOneTeamB = null;
    
    /**
     * playerTwoTeamB
     *
     * @var \Tnm\Gnilive\Domain\Model\Player
     */
    protected $playerTwoTeamB = null;
    
    /**
     * matchTeamA
     *
     * @var \Tnm\Gnilive\Domain\Model\Team
     */
    protected $matchTeamA = null;
    
    /**
     * matchTeamB
     *
     * @var \Tnm\Gnilive\Domain\Model\Team
     */
    protected $matchTeamB = null;
    
    /**
     * currentHole
     *
     * @var string
     */
    protected $currentHole = '';
    
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
        
    }
    
    /**
     * Returns the matchTeamA
     *
     * @return \Tnm\Gnilive\Domain\Model\Team $matchTeamA
     */
    public function getMatchTeamA()
    {
        return $this->matchTeamA;
    }
    
    /**
     * Sets the matchTeamA
     *
     * @param \Tnm\Gnilive\Domain\Model\Team $matchTeamA
     * @return void
     */
    public function setMatchTeamA(\Tnm\Gnilive\Domain\Model\Team $matchTeamA)
    {
        $this->matchTeamA = $matchTeamA;
    }
    
    /**
     * Returns the matchTeamB
     *
     * @return \Tnm\Gnilive\Domain\Model\Team $matchTeamB
     */
    public function getMatchTeamB()
    {
        return $this->matchTeamB;
    }
    
    /**
     * Sets the matchTeamB
     *
     * @param \Tnm\Gnilive\Domain\Model\Team $matchTeamB
     * @return void
     */
    public function setMatchTeamB(\Tnm\Gnilive\Domain\Model\Team $matchTeamB)
    {
        $this->matchTeamB = $matchTeamB;
    }
    
    /**
     * Returns the playerOneTeamA
     *
     * @return \Tnm\Gnilive\Domain\Model\Player $playerOneTeamA
     */
    public function getPlayerOneTeamA()
    {
        return $this->playerOneTeamA;
    }
    
    /**
     * Sets the playerOneTeamA
     *
     * @param \Tnm\Gnilive\Domain\Model\Player $playerOneTeamA
     * @return void
     */
    public function setPlayerOneTeamA(\Tnm\Gnilive\Domain\Model\Player $playerOneTeamA)
    {
        $this->playerOneTeamA = $playerOneTeamA;
    }
    
    /**
     * Returns the playerOneTeamB
     *
     * @return \Tnm\Gnilive\Domain\Model\Player $playerOneTeamB
     */
    public function getPlayerOneTeamB()
    {
        return $this->playerOneTeamB;
    }
    
    /**
     * Sets the playerOneTeamB
     *
     * @param \Tnm\Gnilive\Domain\Model\Player $playerOneTeamB
     * @return void
     */
    public function setPlayerOneTeamB(\Tnm\Gnilive\Domain\Model\Player $playerOneTeamB)
    {
        $this->playerOneTeamB = $playerOneTeamB;
    }
    
    /**
     * Returns the playerTwoTeamA
     *
     * @return \Tnm\Gnilive\Domain\Model\Player $playerTwoTeamA
     */
    public function getPlayerTwoTeamA()
    {
        return $this->playerTwoTeamA;
    }
    
    /**
     * Sets the playerTwoTeamA
     *
     * @param \Tnm\Gnilive\Domain\Model\Player $playerTwoTeamA
     * @return void
     */
    public function setPlayerTwoTeamA(\Tnm\Gnilive\Domain\Model\Player $playerTwoTeamA)
    {
        $this->playerTwoTeamA = $playerTwoTeamA;
    }
    
    /**
     * Returns the playerTwoTeamB
     *
     * @return \Tnm\Gnilive\Domain\Model\Player $playerTwoTeamB
     */
    public function getPlayerTwoTeamB()
    {
        return $this->playerTwoTeamB;
    }
    
    /**
     * Sets the playerTwoTeamB
     *
     * @param \Tnm\Gnilive\Domain\Model\Player $playerTwoTeamB
     * @return void
     */
    public function setPlayerTwoTeamB(\Tnm\Gnilive\Domain\Model\Player $playerTwoTeamB)
    {
        $this->playerTwoTeamB = $playerTwoTeamB;
    }
    
    /**
     * Returns the currentHole
     *
     * @return string $currentHole
     */
    public function getCurrentHole()
    {
        return $this->currentHole;
    }
    
    /**
     * Sets the currentHole
     *
     * @param string $currentHole
     * @return void
     */
    public function setCurrentHole($currentHole)
    {
        $this->currentHole = $currentHole;
    }

}