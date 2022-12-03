<?php

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Server;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {
    
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("BetterClearChat v1, por Mr. SoftwareGuy, ha sido activado correctamente!");
    }

    
    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) {

                if (strtolower($cmd->getName()) == "cc") {
                    if ($args[0] != "me" or $args[0] != "all" or !isset($args[0])) {
                        $sender->sendMessage("Error! Uso: /cc [me/all]")
                    }

                    else {
                        switch ($args[0]) {
                            case 'me':
                                $sender->sendMessage("\n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n")
                                break;
                            
                            case 'all':
                                $sender->getServer()->broadcastMessage("\n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n")
                                break;
                        }
                    }
                }  
        
            }
    }
