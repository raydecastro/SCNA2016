"use strict";

import {expect} from "chai";
import Grid from "../src/grid.js";
import Width100 from "../src/width100";
import Height100 from "../src/height100";

describe("Grid", () => {
    it("shall exist", () => {
        let grid = new Grid();

        expect(grid).to.equal(grid);
    });

    it("shall be able to create the matrix", () => {
       let grid =  new Grid();
        let x = new Width100();
        let y  = new Height100();

        grid.create(x, y);

        expect(grid.getWidth()).to.be.equal(x);
        expect(grid.getHeight()).to.be.equal(y);
    });
});
