<?php

declare(strict_types=1);

namespace HighTec\ArmorStandExpanded\events;

use HighTec\ArmorStandExpanded\entity\object\ArmorStand;
use pocketmine\event\Cancellable;
use pocketmine\Player;
use pocketmine\event\Event;

/**
 * Class ArmorStandExpandedEvent
 * @package HighTec\ArmorStandExpanded\events
 */
class ArmorStandExpandedEvent extends Event implements Cancellable
{
    /**
     * @var Player
     */
    public $player;

    /**
     * @var ArmorStand
     */
    public $armorStand;

    /**
     * ArmorStandExpandedEvent constructor.
     * @param Player $player
     * @param ArmorStand $armorStand
     */
    public function __construct(Player $player, ArmorStand $armorStand)
    {
        $this->player = $player;
        $this->armorStand = $armorStand;
    }

    /**
     * @return Player
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * @return ArmorStand
     */
    public function getArmorStand()
    {
        return $this->armorStand;
    }
}