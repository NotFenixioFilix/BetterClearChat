<?php

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Server;
use pocketmine\item\Item;
use pocketmine\utils\TextFormat as Color;
use pocketmine\event\Listener;

class Plug extends PluginBase implements Listener {
    
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("Activando CLEARCHAT Hecho Por: Instragram.com/zBlazerD");
    }

    
    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) {

                switch($cmd->getName()){
              case "ccme":;
                        $sender->sendMessage("\n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n§8(§eЧат§8) §fВы §cочистили§f себе §bчат§f.");
                        break;
              case "cc":
                        $sender->getServer()->broadcastMessage("\n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n§8[ §eClear§fChat §8] §fPlayer §6" . $sender->getName() . " §fdelete chat!");
                        break;
             case "ccp":
                if(!isset($args[0])){
			$sender->sendMessage("§8(§eЧат§8) §fИспользуйте:§6 /ccp <Игрок>");
                     }else{
		     $player = $sender->getServer()->getPlayer($args[0]); 
                if($player == null) return $sender->sendMessage("§8(§eЧат§8) §fИгрок §cне найден§f."); 
               $name = $player->getName();
			$sender->sendMessage("§8(§eЧат§8) §fИгроку §6{$name} §fбыл §cочищен §bчат§f. ");
			$player->sendMessage("\n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n \n§8(§eЧат§8) §fВам §cочистили§f §bчат§f.");
                        break;
            }
        }
    }
}