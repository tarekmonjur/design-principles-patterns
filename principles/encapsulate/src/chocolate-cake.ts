import { FactoryInterface } from "./factory-interface";

export class ChocolateCake implements FactoryInterface{
    public cook() {
        console.log('cook chocolate cake...');
    }

    public plate() {
        console.log('plate chocolate cake...');
    }
}