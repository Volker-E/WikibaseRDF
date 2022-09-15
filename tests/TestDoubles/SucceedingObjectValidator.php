<?php

declare( strict_types = 1 );

namespace ProfessionalWiki\WikibaseRDF\Tests\TestDoubles;

use ProfessionalWiki\WikibaseRDF\Application\ObjectValidator;

class SucceedingObjectValidator implements ObjectValidator {

	public function isValid( string $object ): bool {
		return true;
	}

}
