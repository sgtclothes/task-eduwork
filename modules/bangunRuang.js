import limas from "./limas.js";
import persegi from "./persegi.js";

let l = new limas();
let p = new persegi();

export default class bangunRuang {
    constructor() {
        this.limas = l;
        this.persegi = p;
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
