<$php

namespace Test;

pocketmine\plugin\PluginBase;
pocketmine\event\Listener;

class Test extends PluginBase implements Listener {

   public function onEnable(){
     $this->getLogger()->info("Plugin Loaded");
   }

