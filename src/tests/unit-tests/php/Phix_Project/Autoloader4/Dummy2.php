<?php

namespace Phix_Project\Autoloader4;

if (PHP_MAJOR_VERSION > 5 || (PHP_MAJOR_VERSION == 5 && PHP_MINOR_VERSION >= 4)) {
	class Dummy2
	{
	        use Trait1;
	}
}