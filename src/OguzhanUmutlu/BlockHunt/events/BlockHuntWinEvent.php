<?php

namespace OguzhanUmutlu\BlockHunt\events;

use OguzhanUmutlu\BlockHunt\arena\Arena;
use pocketmine\event\player\PlayerEvent;
use pocketmine\Player;

class BlockHuntWinEvent extends PlayerEvent {
    /*** @var Arena */
    private $arena;
    public function __construct(Player $player, Arena $arena) {
        $this->player = $player;
        $this->arena = $arena;
    }

    /*** @return Arena */
    public function getArena(): Arena {
        return $this->arena;
    }
}