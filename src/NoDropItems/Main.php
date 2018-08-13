<?php

namespace NoDropItems;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\player\PlayerDropItemEvent;

class Main extends PluginBase implements Listener{

public function onEnable(){

$this->getServer()->getPluginManager()->registerEvents($this, $this);
$this->getLogger->info("§eNoDropItems Activated!");

}

public function onDropItem(PlayerDropItemEvent $event){

$event->setCancelled(true);

}

}
