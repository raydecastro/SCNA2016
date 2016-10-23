<?php

namespace CodeRetreat;

class Board {

	protected $grid = array();

	public function __construct() {
	}

	public function getCellAtLocation($x, $y) {
		return $this->grid[$x][$y];
	}

	public function createCellAtLocation( $x, $y ) {
		$this->grid[$x][$y] = 1;
	}

	public function createGrid($x, $y) {
		$this->grid = array_fill(0,$x,0);

		for($index=0; $index<$x; $index++) {
			$this->grid[$index] = array_fill(0, $y, 0);
		}
	}

	public function getWidth() {
		return count( $this->grid );
	}

	public function getHeight() {
		return count( $this->grid[0] );
	}

	public function countLivingNeighbors($x, $y) {
		$neighborCount = 0;

		$neighborCount += $this->grid[$x - 1][$y - 1];

		$neighborCount += $this->grid[$x][$y - 1];

		$neighborCount += $this->grid[$x + 1][$y - 1];

		$neighborCount += $this->grid[$x + 1][$y];

		$neighborCount += $this->grid[$x + 1][$y + 1];

		$neighborCount += $this->grid[$x][$y + 1];

		$neighborCount += $this->grid[$x - 1][$y + 1];

		$neighborCount += $this->grid[$x - 1][$y];

		return $neighborCount;
	}

	public function destroyCellAtLocation($x, $y) {
		$this->grid[$x][$y] = 0;
	}
	
	public function iterate( $x, $y ) {
		if ( $this->countLivingNeighbors($x,$y) < 2 ) {
			return false;
		}
	}

}