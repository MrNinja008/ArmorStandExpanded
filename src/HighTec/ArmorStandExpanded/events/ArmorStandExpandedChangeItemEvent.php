<?php

declare(strict_types=1);

namespace HighTec\ArmorStandExpanded\events;

use HighTec\ArmorStandExpanded\entity\object\ArmorStand;
use pocketmine\item\Item;
use pocketmine\Player;

/**
 * Class ArmorStandExpandedChangeItemEvent
 * @package HighTec\ArmorStandExpanded\events
 */
class ArmorStandExpandedChangeItemEvent extends ArmorStandExpandedEvent
{
    /**
     * @var Item
     */
    protected $newItem;

    /**
     * @var Item
     */
    protected $oldItem;

    /**
     * ArmorStandExpandedChangeItemEvent constructor.
     * @param Player $player
     * @param ArmorStand $armorStand
     * @param $newItem
     * @param $oldItem
     */
    public function __construct(Player $player, ArmorStand $armorStand, $newItem, $oldItem)
    {
        parent::__construct($player, $armorStand);
        $this->newItem = $newItem;
        $this->oldItem = $oldItem;
    }

    /**
     * @return Item
     */
    public function getNewItem(): Item
    {
        return $this->newItem;
    }

    /**
     * @return Item
     */
    public function getOldItem(): Item
    {
        return $this->oldItem;
    }

}