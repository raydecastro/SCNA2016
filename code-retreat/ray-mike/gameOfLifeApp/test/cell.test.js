"use strict";

import {expect} from "chai";
import Cell from "../src/cell.js";

describe("Cell", () => {
    it("shall exist", () => {
        let cell = new Cell();

        expect(cell).to.equal(cell);
    });
});
