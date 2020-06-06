<?php

namespace xtakumatutix\measures;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use Hayamajin\Ubans;

Class Main extends PluginBase 
{
    public function onEnable() 
    {
        $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
        $this->getLogger()->notice("読み込み完了 - ver.".$this->getDescription()->getVersion());
        $this->UBans = Server::getInstance()->getPluginManager()->getPlugin("UBans");
    }
    public function Uban($name,$player){
    	$this->UBans->UBan($name ,"Fly系の使用の疑い" ,"FlyCheak");
    	$this->getServer()->broadcastMessage("§aFlyCheakPlugin§fが§c".$name."§fを§eUBan§fしました\n§e理由 §f:§6 Fly系の使用の疑い");
    	$player->kick("\n§cサーバーとの接続が切断されました \n§6理由 §f: §6Fly系の使用の疑い ", false);
    }
}