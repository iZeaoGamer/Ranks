<?php
namespace Ranks;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\plugin\plugin;

class Main extends PluginBase{

public function onEnable() : void{
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("Plugin enabled.");
}

public function onDisable() : void{
        $this->getLogger()->info("Plugin disabled.");
}

public function onCommand(CommandSender $sender, Command $command, sring $label, array $args) : bool{
    if($strtolower($command->getName()) == "vmranks") {
        if($sender->hasPermission("ranks.vmranks")) {
        $sender->sendMessage("§7[§6Void§bFactions§cPE§dRANKS§7]");
        $sender->sendMessage("§aHere are a list of timed ranks you can have and the minutes on them:");
        $sender->sendMessage("§2Player Rank - §aDefault rank.");
        $sender->sendMessage("§dShy Rank - §54 minutes");
        $sender->sendMessage("§5Registered Rank - §d15 minutes.");
        $sender->sendMessage("§6Member Rank - §e50 minutes.");
        $sender->sendMessage("§4Active Rank - §c100 minutes.");
        $sender->sendMessage("§3Addicted rank - §b500 minutes.");
        $sender->sendMessage("§cGood Rank - §4600 minutes.");
        $sender->sendMessage("§1Great Rank - §9650 minutes.");
        $sender->sendMessage("§d§lPro Rank - §5700 minutes.");
        $sender->sendMessage("§4§lPopular rank - §c900 minutes.");
        $sender->sendMessage("§aKnown Rank - §21,200 minutes.");
        $sender->sendMessage("§5§lT§6O§cP - §a5,000 minutes.");
        $sender->sendMessage("§7§lOld§6Player - §b10,000 minutes.");
        $sender->sendMessage("§aKing - §220,000 minutes");
        $sender->sendMessage("§4PvP§bGod - §c15,000 minutes.");
        $sender->sendMessage("§3Raiding§bGod - §330,000 minutes.");
        $sender->sendMessage("§aLongest§bBest§cPlayer - §450,000 minutes.");
        return true;
        }
    }
    
    if($strtolower($command->getName()) == "staffranks") {
       if($sender->hasPermission("ranks.staffranks")) {
       $sender->sendMessage("§7[§6Void§bFactions§cPE§dSTAFfRANKS§7]");
       $sender->sendMessage("§aHere are a list of Staff ranks we have in order:");
       $sender->sendMessage("§dHelper - §5helps the server, basically Chat moderator.");
       $sender->sendMessage("§3Trial-§cMod - §bThey are on Trial, and are Basic Moderators of the server.");
       $sender->sendMessage("§cMod - §4Full-Time Moderators on the server.");
       $sender->sendMessage("§aJR.§4Admin - §2Junior Administrators on the server. (Basically a Trial Administrator.)");
       $sender->sendmessage("§3Admin - §bFull-Time Administrator on the server.");
       $sender->sendMessage("§3SR.§cModerator - §4Head of the Moderation team.");
       $sender->sendMessage("§3SR.§2Admin - §cHead of the Administration team.");
       $sender->sendMessage("§4§lOwner - §cOwners of the server.");
       return true; 
       }
    }
    }
}
