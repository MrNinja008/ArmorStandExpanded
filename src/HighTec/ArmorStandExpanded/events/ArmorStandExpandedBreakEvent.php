<?php

declare(strict_types=1);

namespace HighTec\ArmorStandExpanded\events;

/**
 * Class ArmorStandExpandedBreakEvent
 * @package HighTec\ArmorStandExpanded\events
 */
class ArmorStandExpandedBreakEvent extends ArmorStandExpandedEvent
{
    /**
     * @return array|null
     */
    public function getDrops()
    {
        return $this->armorStand->getDrops();

    }

    /**
     * @param array $items
     */
    public function setDrops(array $items)
    {
        return $this->armorStand->setDrops($items);
    }

}