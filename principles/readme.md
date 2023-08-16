# :bulb: SOLID Principle

- **Single Responsibility**
- **Open / Closed**
- **Liskov Substitution**
- **Interface Segregation**
- **Dependency Inversion**

<br/>

## :art: Interface Segregation Principle:

- **Classes should depend on the smallest interface**
- **Helps design good classes**
- **Helps write unit test case**

<br/>

## :books: Liskov Substitution Principle:

It helps to look at common code that can become a supper class and the special cases can become subclasses. When a design calls for polymorphic peer classes, this principle can be applied to each one of the peers.
You should always be able to subtitute subtypes for their base class.

- **Objects of some superclass S can be replaced with objects of any subclass of S**
- **Constrains subclass design**
- **This helps design good polymorphism**

### Lets see a problem example:

#### This code is work fine.

```
public void doSomething(ClassA a) {
    // do some work here
}

ClassA a = new ClassA();
obj.doSomething(a);
```

#### But lets say we have a sub class ClassB.

```
public void doSomething(ClassA a) {
    // do some work here
}

ClassA b = new ClassB();
obj.doSomething(b);
```

#### So now its won't work. we can wasy fix it like below.

```
public void doSomething(ClassA a) {
    if (a instanceof ClassB) {
        // special case
    } else {
        // normal behavior
    }
}

ClassA b = new ClassB();
obj.doSomething(b);
```

#### Now our problem is solve, But we open doSomething method for modification that break open-close principle. so that's why this principle come in.

<br/>

## :open_file_folder: Open Close Principle:

This principle helps to define what features of a class need to be exposed.

- **"Open to extension" - means adding subclasses as needed**
- **"Closed to modification" - avoids tweaking the code to handle new situations**
- Allow new behavior without risking changes to proven code.
- Improve maintainability and extensibility of a design.

<img alt="Open close principle example" src="https://github.com/tarekmonjur/design-patterns/blob/master/dist/open-close-duck-class.png" width=100%>

<img alt="Open close principle example" src="https://github.com/tarekmonjur/design-patterns/blob/master/dist/open-close-duck.png" width=100%>

<br/>

## :hourglass_flowing_sand: Dependency Inversion Principle:

#### High-level modules should not depend on the low-level modules.

This principle is focused on packaging the code. Its make sure to avoid referencing the concrete class name. This principle is related to the concept of late binding.

- **A direct dependency on a concrete class needs to be inverted to be indirect**
- **Depend on abstract classes or interfaces to avoid references to concrete class names**
- **Avoid concrete class name dependencies**

### Typical Object-Oriented Thinking:

We often think of the high-level components as some kind of policymakers that are commanding a set of low-level components, who are really carrying out all the real work.
The problem with this approach is that it tightly couples our high-level components to our low-level ones.

<img alt="Dependency inversion tight couple" src="https://github.com/tarekmonjur/design-patterns/blob/master/dist/dependency-inversion-tight-couple.png" width=30%>

<img alt="Dependency inversioin tight couple example" src="https://github.com/tarekmonjur/design-patterns/blob/master/dist/dependency-inversion-tight-couple-example.png" width=70%>

### Thinking with Dependency Inversion: Inverting the Dependency.

The dependency inversion principle tells us to think of this in a different way, by reversing the direction of the dependency. It tells us really two things.

<img alt="Dependency inversion loose couple" src="https://github.com/tarekmonjur/design-patterns/blob/master/dist/dependency-inversion-loose-couple.png" width=50%>

#### First, as we said, high-level modules should not depend on low-level modules. Actually, both should depend on abstractions.

#### Second, abstractions should not depend on details, Actually details should depend on abstractions.

<img alt="Dependency inversion loose couple example" src="https://github.com/tarekmonjur/design-patterns/blob/master/dist/dependency-inversion-loose-couple-example.png" width=50%>

- Frees our high-level components from being dependent on the details of the low-level components.
- Helps design software that is reusable and resilient to change.
- All relationships should involve abstract classes of interfaces, not concrete classes.
- Abstractions allow details to remain isolated from each other.

<br/>

## :rainbow: Single Responsibility Principle:

This principle is a kind of summary of all other principles.

- **One responsibility per class**
- **A class should have only one reason to change**

<img alt="Single responsibility principle example" src="https://github.com/tarekmonjur/design-patterns/blob/master/dist/single-responsibility-example.png" width=100%>
