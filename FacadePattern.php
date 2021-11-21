<?php
class Rectangle {
	function __construct() {}
	
	public function draw(): void {
		echo 'Rectangle::draw()<br/>';
	}
}

class Square {
	function __construct() {}
	
	public function draw(): void {
		echo 'Square::draw()<br/>';
	}
}

class Circle {
	function __construct() {}
	
	public function draw(): void {
		echo 'Circle::draw()<br/>';
	}
}

class ShapeMaker {
	function __construct() {
		$this->circle = new Circle();
		$this->square = new Square();
		$this->rectangle = new Rectangle();
	}
	
	public function drawCircle(): void {
		$this->circle->draw();
	}
	
	public function drawSquare(): void {
		$this->square->draw();
	}
	
	public function drawRectangle(): void {
		$this->rectangle->draw();
	}
}

$shapeMaker = new ShapeMaker();
$shapeMaker->drawCircle();
$shapeMaker->drawSquare();
$shapeMaker->drawRectangle();
?>