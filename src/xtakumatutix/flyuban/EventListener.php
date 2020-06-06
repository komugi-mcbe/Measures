<?php

namespace xtakumatutix\flyuban;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerToggleFlightEvent;
use Hayamajin\Ubans;

class EventListener implements Listener 
{
    private $Main;

    public function __construct(Main $Main)
    {
        $this->Main = $Main;
    }

    public function Fly(PlayerToggleFlightEvent $event)
    {
        $player = $event->getPlayer();
        $name = $player->getName();
        if ($event->isFlying()){
            if (!$player->isOP()){
                $this->Main->Uban($name,$player);
            }
        }
    }
}