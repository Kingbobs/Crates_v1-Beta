<?php

/**
 * CrateKey class
 *
 * Created 
 *
 * @author 
 */

namespace crates\item;

use pocketmine\block\TripwireHook;

class CrateKey extends TripwireHook{

	protected $id = self::TRIPWIRE_HOOK;

	public function __construct($meta = 0){
		$this->meta = $meta;
	}

	public function getName() : string{
		return "Crate Key";
	}

}
