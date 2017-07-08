<?php

namespace JaroslavLibal\DateTime\Factory;

use DateTimeImmutable;

class DateTimeImmutableFactory {

	public function create(): DateTimeImmutable {
		return new DateTimeImmutable();
	}

}
