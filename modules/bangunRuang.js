import limas from "./limas.js";

let l = new limas();

export default class bangunRuang {
    constructor() {
        this.limas = l;
        this.bola = {
            keliling: () => {
                return "rumus keliling bola";
            },
            luas: () => {
                return "rumus luas bola";
            },
        };
    }
}
