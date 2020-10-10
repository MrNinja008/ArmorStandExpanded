<?php

declare(strict_types=1);

namespace HighTec\ArmorStandExpanded\events;

use HighTec\ArmorStandExpanded\entity\object\ArmorStand
use pocketmine\Player;
use pocketmine\event\Event;

class ArmorStandExpandedEvent extends Event
{
  public $player;
  
  public $armorStand;
  
  public function __construct(Player $player, ArmorStand $armorStand){
    $this->player = $player;
    $this->armorStand = $armorStand;
  }
  
  public function getPlayer(){
    return $this->player;
  }
  
  public function getArmorStand(){
    return $this->armorStand;
  }
}