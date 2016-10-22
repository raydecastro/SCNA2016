"use strict";

import {expect} from "chai";
import Height100 from "../src/height100.js";

describe("Height100", () => {
    it("shall exist", () => {
        let h100 = new Height100();

        expect(h100).to.equal(h100);
    });
});
