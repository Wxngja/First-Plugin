<?php

namespace Test;

use pocketmine\plugin\PluginBase;

class Test extends PluginBase {

   public function onEnable(){
     $this->getLogger()->info("Plugin Loaded");
   }
    
   public function onDisable(){
     $this->getLogger()->info("Plugin Disabled");
   }
}

