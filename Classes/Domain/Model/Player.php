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
 * Player
 */
class Player extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     */
    protected $name = '';
    
    /**
     * captain
     *
     * @var bool
     */
    protected $captain = false;
    
    /**
     * team
     *
     * @var \Tnm\Gnilive\Domain\Model\Team
     */
    protected $team = null;
    
    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * Returns the captain
     *
     * @return bool $captain
     */
    public function getCaptain()
    {
        return $this->captain;
    }
    
    /**
     * Sets the captain
     *
     * @param bool $captain
     * @return void
     */
    public function setCaptain($captain)
    {
        $this->captain = $captain;
    }
    
    /**
     * Returns the boolean state of captain
     *
     * @return bool
     */
    public function isCaptain()
    {
        return $this->captain;
    }
    
    /**
     * Returns the team
     *
     * @return team
     */
    public function getTeam()
    {
        return $this->team;
    }
    
    /**
     * Sets the team
     *
     * @param $team
     * @return void
     */
    public function setTeam($team)
    {
        $this->team = $team;
    }

}