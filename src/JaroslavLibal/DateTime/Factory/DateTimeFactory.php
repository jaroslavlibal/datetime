<?php

namespace JaroslavLibal\DateTime\Factory;

use DateTime;

class DateTimeFactory {

	public function create(): DateTime {
		return new DateTime();
	}

}
