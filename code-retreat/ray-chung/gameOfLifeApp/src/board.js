"use strict";

class Board {
    constructor() {
        this.theBoard = undefined;
    }

    create(width, height) {
        this.theBoard = new Array(width);

        for (let index = 0; index < width; index += 1) {
            this.theBoard[index] = new Array(height);
        }
    }

    getWidth() {
        return this.theBoard.length;
    }

    getHeight() {
        return this.theBoard[this.theBoard.length - 1].length;
    }
}

export default Board;
