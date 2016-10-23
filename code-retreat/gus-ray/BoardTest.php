<?php

class BoardTest extends PHPUnit_Framework_TestCase {
	public function setUp() {
		$this->Board = new CodeRetreat\Board();
	}

	public function tearDown() {
		unset($this->Board);
	}

	// lifeless.
	public function testGetCellAtLocation() {
		$this->Board->createGrid(5, 5);
		$this->assertEquals(
			$this->Board->getCellAtLocation(1,1),
			false,
			'This dead cell should return that it is dead as the grid is lifeless at this point.'
		);
	}

	public function testBoardShallHaveAbilityToCreateGrid() {
		$width = 100;
		$height = 50;

		$this->Board->createGrid($width, $height);

		$this->assertEquals(
			$this->Board->getWidth(),
			$width,
			'createGrid should create a board with dimensions (width)'
		);

		$this->assertEquals(
			$this->Board->getHeight(),
			$height,
			'createGrid should create a board with dimensions (height)'
		);
	}

	// lifeless.
	public function testZeroCountLivingNeighbors() {
		$x = 12;
		$y = 10;
		$this->assertEquals(
			$this->Board->countLivingNeighbors($x,$y),
			0,
			'There are no living neighbors. This land is lifeless and sad :('
		);
	}

	public function testCountLivingNeighbors() {

		$width = 100;
		$height = 50;
		$x = 50;
		$y = 20;

		$this->Board->createGrid($width, $height);
		$this->Board->createCellAtLocation($x -1, $y -1);
		$this->assertEquals(
			$this->Board->countLivingNeighbors($x,$y),
			1,
			'Assert that this cell has precisely 1 living neighbor. Nice and quiet.'
		);
	}

	public function testBoardShallHaveAbilityToSetCellsToLife() {

		$width = 100;
		$height = 50;
		$x = 50;
		$y = 20;

		$this->Board->createGrid($width, $height);
		$this->Board->createCellAtLocation($x, $y);
		$this->assertEquals(
			$this->Board->getCellAtLocation($x, $y),
			true,
			"The board will have ability to create living cells based on X, Y"
		);
	}

	public function testBoardShallHaveAbilityToSetCellsToDeath() {
		$width = 100;
		$height = 50;
		$x = 50;
		$y = 20;

		$this->Board->createGrid($width, $height);
		$this->Board->destroyCellAtLocation($x, $y);
		$this->assertEquals(
			$this->Board->getCellAtLocation($x, $y),
			false,
			"The board will have ability to create living cells based on X, Y"
		);
	}

	public function testAnyLiveCellWithFewerThanTwoLiveNeighboursDies() {
		$width = 100;
		$height = 100;
		$x = 50;
		$y = 50;

		$this->Board->createGrid($width, $height);
		$this->Board->createCellAtLocation($x, $y);
		$this->Board->createCellAtLocation($x + 1, $y + 1);

		$this->assertEquals(
			$this->Board->getCellAtLocation($x, $y),
			true,
			'test that there is a living cell @ 50, 50'
		);

		$this->Board->iterate($x, $y);

		$this->assertEquals(
			$this->Board->getCellAtLocation($x, $y),
			false,
			"after the next iteration/evolution, the live cell with < 2 neighbor must die"
		);
	}

}
