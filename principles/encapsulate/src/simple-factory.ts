import { BlueberryCake } from './blueberry-cake';
import { ChocolateCake } from './chocolate-cake';
import { FactoryInterface } from './factory-interface';

export class SimpleFactory {
    public static createFactory(type: string): FactoryInterface {
        let factory: FactoryInterface;
        if (type === 'chocolate-cake') {
            factory = new ChocolateCake();
        } else if (type === 'blueberry-cake') {
            factory = new BlueberryCake();
        } else {
            factory = {} as FactoryInterface;
        }
        return factory;
    }
}
