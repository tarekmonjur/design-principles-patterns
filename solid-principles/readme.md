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
Its helps to look at common code that can become a supper class and the special cases can become subclasses. When a design calls for polymorphic peer classes, this principle can be applied to each one of the peers.
* **Objects of some superclass S can be replace with objects of any subclass of S**
* **Constrains subclass desing**
* **This helps design good polymorphism**

<br/>

## Open Close Principle:
This principle helps to define what features of a class need to be exposed.
* **"Open to extension" - means adding subclasses as needed**
* **"Closed to modification" - avoids tweaking the code to handle new situations**

<br/>

## Dependency Inversion Principle:
This principle is focused on packaging the code. Its make sure avoid reference the concrete class name. This principle related to the concept of late binding.
* **A direct dependency on a concrete class needs to be inverted to be indirect**
* **Depend on abstruct classes or interfaces to avoid references concrete class names**
* **Avoid concrete class name dependencies**

<br/>

## Single Responsibility Principle:
This princple is kind of summary of all other princeples.
* **One responsibility per class**
* **A class should have only one reason to change**




