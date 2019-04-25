<?php

class Foo {
	private $bar;
	private $baz;

	public function __construct(string $newBar, int $newBaz) {
		$this->setBar($newBar);
		$this->setBaz($newBaz);
	}

	public function getBar() : string {
		return $this->bar;
	}

	/**
	 * @param mixed $bar
	 */
	public function setBar(string $newBar): void {
		$this->bar = $newBar;
	}
	/**
	 * @return mixed
	 */
	public function getBaz() : int {
		return $this->baz;
	}

	/**
	 * @param mixed $baz
	 */
	public function setBaz($newBaz): void {
		$this->baz = $newBaz;
	}

	public function concat() : string {
		return $this->bar . (string)$this->baz;
	}
}

$foo = new Foo("string", 12345);
echo $foo->concat();