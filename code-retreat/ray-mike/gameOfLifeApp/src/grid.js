class Grid {
    constructor() {
        this.matrix = [];
        this.width = undefined;
        this.height = undefined;
    }

    create(x, y) {
        this.width = x;
        this.height = y;
        this.matrix = new Array(x.width);

        for (let index = 0; index < x.width; index += 1) {
            this.matrix[index] = new Array(y.height);
        }
    }

    getWidth() {
        return this.width;
    }

    getHeight() {
        return this.height;
    }
}

export default Grid;


