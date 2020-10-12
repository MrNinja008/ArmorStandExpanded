<?php

declare(strict_types=1);

namespace HighTec\ArmorStandExpanded\events;

use HighTec\ArmorStandExpanded\entity\object\ArmorStand;
use pocketmine\Player;

/**
 * Class ArmorStandExpandedPlayerChangePoseEvent
 * @package HighTec\ArmorStandExpanded\events
 */
class ArmorStandExpandedPlayerChangePoseEvent extends ArmorStandExpandedEvent
{
    /**
     * @var int
     */
    protected $oldPose;

    /**
     * @var int
     */
    protected $newPose;

    /**
     * ArmorStandExpandedPlayerChangePoseEvent constructor.
     * @param Player $player
     * @param ArmorStand $armorStand
     * @param int $oldPose
     * @param int $newPose
     */
    public function __construct(Player $player, ArmorStand $armorStand, $oldPose, $newPose)
    {
        parent::__construct($player, $armorStand);
        $this->oldPose = $oldPose;
        $this->newPose = $newPose;
    }

    /**
     * @return int
     */
    public function getOldPose(): int
    {
        return $this->oldPose;
    }

    /**
     * @return int
     */
    public function getNewPose(): int
    {
        return $this->newPose;
    }

    /**
     * @param int $pose
     * @return int
     */
    public function setNewPose(int $pose)
    {
        if ($pose >= 0 && $pose <= 12) {
            return $this->newPose = $pose;
        }
        return $this->oldPose;
    }

}