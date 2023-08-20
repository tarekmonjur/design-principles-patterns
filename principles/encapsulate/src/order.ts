import { FactoryInterface } from './factory-interface'
import { SimpleFactory } from './simple-factory'

export class Order {
    private factory: FactoryInterface
    constructor(type: string) {
        this.factory = SimpleFactory.createFactory(type)
    }

    make() {
        this.factory.cook()
        this.factory.plate()
        return this
    }
}
