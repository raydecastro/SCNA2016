"use strict";

import {expect} from "chai";
import Cell from "../src/cell.js";

describe("Cell", () => {
    it("shall exist", () => {
        let cell = new Cell();

        expect(cell).to.be.defined;
    });

    it("shall have a property indicating if it is dead or alive", () => {
       let cell = new Cell();
        cell.isAlive = true;

        expect(cell.isAlive).to.be.true;
    });
});
