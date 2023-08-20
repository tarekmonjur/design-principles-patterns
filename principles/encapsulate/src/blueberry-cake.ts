import { FactoryInterface } from './factory-interface'

export class BlueberryCake implements FactoryInterface {
    public cook() {
        console.log('cook blueberry cake...')
    }

    public plate() {
        console.log('plate blueberry cake...')
    }
}
