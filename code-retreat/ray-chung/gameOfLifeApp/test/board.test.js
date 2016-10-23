"use strict";

import {expect} from "chai";
import Board from "../src/board.js";
import Cell from "../src/cell.js";

describe("Board", () => {
    it("shall exist", () => {
        let board = new Board();

        expect(board).to.be.defined;
    });
    it("shall only accept a 2-dimensional argument for the size of board it'll create", () => {
        let board = new Board();
        let width = 12;
        let height = 24;
        board.create(width,height);

        expect(board.getWidth()).to.equal(width);
        expect(board.getHeight()).to.equal(height);
    });
    it("shall be able to arbitrarily add a cell to any location", () => {
        let board = new Board();
        let cell = new Cell();
        let testLocation = [12,24];

        cell.id = 123;
        cell.isAlive = true;

        cell {id=123; isAlive=true; location=[23,234]};

        board.insertCell(cell,testLocation);
        expect(board.getCellAtLoc(testLocation)).to.be.equal(cell);
    });
});
