# SOLID Principle

* **Single Responsibility**
* **Open / Closed**
* **Liskov Substitution**
* **Interface Segregation**
* **Dependency Inversion**

<br/>

## Interface Segregation Principle:
* **Classes should depend on the smallest interface**
* **Helps design good classes**
* **Helps write unit test case**

<br/>

## Liskov Substitution Principle:
It helps to look at common code that can become a supper class and the special cases can become subclasses. When a design calls for polymorphic peer classes, this principle can be applied to each one of the peers.
* **Objects of some superclass S can be replaced with objects of any subclass of S**
* **Constrains subclass design**
* **This helps design good polymorphism**

<br/>

## Open Close Principle:
This principle helps to define what features of a class need to be exposed.
* **"Open to extension" - means adding subclasses as needed**
* **"Closed to modification" - avoids tweaking the code to handle new situations**
* Allow new behavior without risking changes to proven code.
* Improve maintainability and extensibility of a design.

<br/>

## Dependency Inversion Principle:
#### High-level modules should not depend on the low-level modules.
This principle is focused on packaging the code. Its make sure to avoid referencing the concrete class name. This principle is related to the concept of late binding.
* **A direct dependency on a concrete class needs to be inverted to be indirect**
* **Depend on abstract classes or interfaces to avoid references to concrete class names**
* **Avoid concrete class name dependencies**

### Typical Object-Oriented Thinking:
We often think of the high-level components as some kind of policymakers that are commanding a set of low-level components, who are really carrying out all the real work.
The problem with this approach is that it tightly couples our high-level components to our low-level ones.

### Thinking with Dependency Inversion: Inverting the Dependency.
The dependency inversion principle tells us to think of this in a different way, by reversing the direction of the dependency. It tells us really two things.
#### First, as we said, high-level modules should not depend on low-level modules. Actually, both should depend on abstractions. 
#### Second, abstractions should not depend on details, Actually details should depend on abstractions.

* Frees our high-level components from being dependent on the details of the low-level components.
* Helps design software that is reusable and resilient to change.
* All relationships should involve abstract classes of interfaces, not concrete classes.
* Abstractions allow details to remain isolated from each other.

<br/>

## Single Responsibility Principle:
This principle is a kind of summary of all other principles.
* **One responsibility per class**
* **A class should have only one reason to change**




