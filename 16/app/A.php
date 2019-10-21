<?php


namespace app;


class A {

	protected const TEST = "Class A";

	public function getTest() {
		var_dump(self::TEST);
	}

	public function getTest2() {
		var_dump(static::TEST);
	}
}