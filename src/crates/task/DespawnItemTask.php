<?php

/**
 * DespawnItemTask.php class
 *
 * Created  at 8:40 PM
 *
 * @author
 */

namespace crates\task;

use crates\Main;
use pocketmine\math\Vector3;
use pocketmine\network\protocol\BlockEventPacket;
use pocketmine\network\protocol\RemoveEntityPacket;
use pocketmine\Player;
use pocketmine\scheduler\PluginTask;

class DespawnItemTask extends PluginTask{

	/** @var Main */
	private $plugin;

	/** @var Player */
	private $player;

	/** @var int */
	private $eid;

	private $pos;

	public function __construct(Main $plugin, Player $player, int $eid, Vector3 $pos){
		parent::__construct($plugin);
		$this->plugin = $plugin;
		$this->player = $player;
		$this->eid = $eid;
		$this->pos = $pos;
		$plugin->getServer()->getScheduler()->scheduleDelayedTask($this, 20 * 5);
	}

	/**
	 * @return Main
	 */
	public function getPlugin(){
		return $this->plugin;
	}

	public function onRun($currentTick){
		$pk = new RemoveEntityPacket();
		$pk->eid = $this->eid;
		$this->player->dataPacket($pk);
		$pk = new BlockEventPacket();
		$pk->x = $this->pos->x;
		$pk->y = $this->pos->y;
		$pk->z = $this->pos->z;
		$pk->case1 = 1;
		$pk->case2 = 0;
		$this->player->dataPacket($pk);
	}

}
