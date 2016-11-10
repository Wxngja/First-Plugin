<?php
/*A test plugin for Jonathan made by Wangja*/
namespace UsernameCheck;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\utils\TextFormat as Whatever;

class Main extends PluginBase implements Listener {
	
    public function onEnable() {
	$this->getServer()->getPluginManager()->registerEvents($this, $this);
	$this->getLogger()->info(Whatever::BLUE. "Username Check! A test plugin to be implemented on Pocketmine/Genisys servers. Soon to be on Nukkit");
    }
   /*Blocks this username from joining the server*/
   public function onJoin(PlayerJoinEvent $event){
    $player = $event->getPlayer();
      /*Indicated the username which is blocked in the ""(Can be changed)*/
    if($player->getName() == "Jonathanftw" || "jonathanftw" || "jonathanftw2" || "jonathanftw3" ){
        $player->kick(Whatever::RED . "[Username Check] Jonathanftw cannot be used in-game, Please change username.");
    }
}
