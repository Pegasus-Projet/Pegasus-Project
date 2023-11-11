<?php
namespace fr\redtv\playerauth;


use pocketmine\entity\Location;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\network\mcpe\NetworkSession;
use pocketmine\player\PlayerInfo;
use pocketmine\Server;
use pocketmine\utils\SingletonTrait;

class Player extends \pocketmine\player\Player
{

    use SingletonTrait;

    public function __construct(Server $server, NetworkSession $session, PlayerInfo $playerInfo, bool $authenticated, Location $spawnLocation, ?CompoundTag $namedtag)
    {
        parent::__construct($server, $session, $playerInfo, $authenticated, $spawnLocation, $namedtag);
        self::setInstance($this);
    }

    public function saveNBT(): CompoundTag
    {
        $nbt = parent::saveNBT();

        /*****************************/

        // login
        // user, email, password


        /*****************************/

        return $nbt;
    }

}