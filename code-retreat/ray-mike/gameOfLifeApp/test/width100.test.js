"use strict";

import {expect} from "chai";
import Width100 from "../src/width100.js";

describe("Width100", () => {
    it("shall exist", () => {
        let w100 = new Width100();

        expect(w100).to.equal(w100);
    });
});
