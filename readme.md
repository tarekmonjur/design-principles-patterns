# :rocket: Design Patterns & Principles:

## :mortar_board: Design Principles:

Design principles are general guidelines that can guide our class structure and relationships.
Design principles help us by giving an additional set of guidelines on top of the core object-oriented concepts.
Following these Design Principles have resulted in a set of recurring patterns and we call those structures design patterns.

- Guidelines, not rules or laws.
- Observed to result in good object-oriented designs.
- Help us avoid bad object-oriented design.

#### Symptoms of bad design:

- Rigidity -> hard to change due to dependencies.
- Fragility -> As make changes then getting unexpected bugs that maybe comes from unrelated parts.
- Immobility -> Hard to reuse.

### Fundamental Principles:

- Encapsulate what varies.
- Favor composition.
- Program to interfaces.
- Loose coupling.
- SOLID.

<br/>

## :pill: Encapsulate what varies:

Identify the aspects of your application that vary and separate them from what stays the same. Look is the same code changing with every new requirement?
Then you know you have got a behavior that really needs to be pulled out and separated from all the stuff that doesn't change.
**Encapsulate what varies** Underlines almost all design patterns.

- Look for code that changes with every new requirement.
- Alter or extend the code that varies without affecting code that doesn't.
- Basis of almost every design pattern.
- Pay attention to how each pattern makes use of this principle.

### Encapsulate factory eample:

#### Let's say we have a system for order pancakes and here we have an order pancake method.

Its very simple that create a concrete class object for specific pancake based on type and then its cook the pancake, plate it, add some butter and finaly return the pancake.

```
public Pancake orderPancake(String type) {
  Pancake pancake;
  // part1
  if (type.equals == 'classic') {
    pancake = new ClassicPancake();
  } else if (type.equals == 'bluberry') {
    pancake = new BlueberryPancake();
  } else if (type.equals == 'chocolate') {
    pancake = new ChocolatePancake();
  } else if (type.equals == 'banana') {
    pancake = new BanannaPancake();
  }

  // part2
  pancake.cook();
  pancake.plate();
  pancake.addButter();
  return pancake.
}
```

#### But let's think about how this code change over request to take banana pancake off the menu, perhaps its poor selling. Likewise request to add new pancake to the menu list.

**So overtime we are going to end up with all the code that is selecting the type of pancake to instantiate that's going to keep changing with every new requirement that we have.**

### Create independant factory:

#### we have to find what is varying and pull it out into its own self-container, so that we can change or update that on its own. So looking at the code and see that the part1 is actully is vary and part2 does not vary.

```
public class SimplePancakeFactory {
  public Pancake createPancake(String type) {
    Pancake pancake == null;
    if (type.equals == 'classic') {
      pancake = new ClassicPancake();
    } else if (type.equals == 'bluberry') {
      pancake = new BlueberryPancake();
    } else if (type.equals == 'chocolate') {
      pancake = new ChocolatePancake();
    } else if (type.equals == 'banana') {
      pancake = new BanannaPancake();
    }
    return pancake;
  }
}
```

<br/>

## :dvd: Favor composition over inheritance:

Its also known - `HAS-A is better than IS-A`

#### IS-A is an inheritance relationship. As like

- A Dog is an Animal, Dog --> Animal.
- Or A taxi is an automobile. Taxi --> Automobile.

#### HAS-A is a relationship of composition. As like

- A Dog has an Owner. Dog --<> Owner.
- Taxi has a Passenger. Taxi --<> Passenger.

### Let's consider a coffee shop: :coffee:

Many customers request coffee with condiments. As like this.
![inheritance coffee class](https://github.com/tarekmonjur/design-patterns/blob/master/dist/inheritance-coffee-class.png)

### If we want to add a caramel condiment:

What about when a customer wants both butter and milk or a different condiment in a coffee?
Or, let's say we have a new topping, like caramel. Then we will need another class for that variant.
Ah, that actually commentatorial explosion of classes over time. as we have to deal with all the combinations.

### Let's see a different approach: Favor composition over inheritance.

**Instead of a coffeeWithButter IS-A coffee, what about a coffee HAS-A condiments?**
Composition can provide an alternative subclassing for extending behavior.

![favor composition condiments classes](https://github.com/tarekmonjur/design-patterns/blob/master/dist/favor-composition-condiments-classes.png)

![favor conposition coffee class](https://github.com/tarekmonjur/design-patterns/blob/master/dist/favor-composition-coffee-class.png)

#### Improved this design with composition:

- We can add any number of condiments easily at runtime.
- Implementing new condiments by adding a new class.
- No code duplication.
- Avoid class explosion.
- Instead of inheriting behavior, we can compose our objects with new behaviors.
- Composition often gives us more flexibility, even allows behavior changes at runtime.
- Composition is a common technique used in design patterns.

<br/>

## :couple: Loose Coupling:

Components should be independent, Relying on the knowledge of other components as little as possible.
This principle says to strive for loosely coupled designs between objects and interact.
The opposite of loose coupling is tight coupling, which typically means that components are too dependent on each other.

- Loose coupling reduces the dependency between components.

### Let's see a tight coupling example: A Weather APP

- The weather app is relying on a concrete class to do the display.
- The weather app knows a lot about the LCDScreen.
- Changes to LCDScrren are going to affect the Weather app and vice versa.

![Tight couple app component](https://github.com/tarekmonjur/design-patterns/blob/master/dist/tight-coupling-app-component.png)

### Improve the weather app to loosely coupling:

- The weather has no real knowledge of the screen, other than that it implements the Screen interface.
- The weather app and any screen can change their internal implementations and it won't impact the other class.

![Loosely coupling app interface classes](https://github.com/tarekmonjur/design-patterns/blob/master/dist/loosely-coupling-interface-classes.png)
![Loosely coupling app component](https://github.com/tarekmonjur/design-patterns/blob/master/dist/loosely-coupling-component.png)

<br/>

## :anchor: Program to Interfaces:

This design principle guide us to make use to abstract types, not concret ones to allow our design to be more flexible and maintable.

#### Program to Inerface, Not implementatioins:

Where possible, components should use abastract classes or interfaces instead of a specific implementation.
`Progeam to an interface` really means `Program to a super type`

### Programming in an implementation:

Here we assigning the DB property to a new instance of the concrete class Commercial DB.
So if we use a specific concrete class, like Commercial DB. Then we are going to be stuck with that implementation and then we will have to end up essentially hard coding by specific database vendor.

![Program to implementation](https://github.com/tarekmonjur/design-patterns/blob/master/dist/programming-to-implementation.png)

Like, if we want to change to another database in the future, Or like if we ant to test our code against a lightweight, low overhead test database, this design we have already committed to the commerical DB. So, we have code rework including every reference to that database.

### Programming in an inerface:

So if we know the desing principle **Program to inerface, not implemention** then here is our new design.

- Use interfaces or abastract classes when possible, rather then concrete classes.
- Allow to better exploit polymorphism.
- Frees classes from knowledge of concrete types.
- Improves extensibility and maintainability.

![Programming to interface](https://github.com/tarekmonjur/design-patterns/blob/master/dist/programming-to-interface.png)

<br/>

### :zap: [SOLID Design Principles](https://github.com/tarekmonjur/design-patterns/blob/master/solid-principles/readme.md)

<br/>

## Design Patterns:

Design patterns are tried-and-true design solutions that have been found to solve specific problems.

<br/>

# :sunglasses: Software Architect

- keep many different components in your mind.
- Have a rudimentary knowledge of how they all work.
- Software architects focus on the big picture.
- High-level understanding.

### Best Architects

The best architects aren't dictators, they are teachers.

- Work with developers.
- Understand the facts.
- Guide the team to a solution.
- Lead developers to the right decisions.
- Work with their teams.
- Need a motivated team to do their best work.
- Leverage the experience of the team.
- Train, encourage, and energize the team members.

<br>

# :computer: Software Architecture Patterns

## Application Landscape Patterns

- Single application to the end user.
- Multiple applications behind the scenes are possible.

### Monolith Pattern:

**Advantages:**

- Simple architecture.
- Easy to understand, implement, and test.
- Easy Deployment.
- Ideal for limited scope.

**Disadvantages:**

- Tight coupling.
- Easily leads to complex code.
- One size fits all for every subdomain.

### N-tier Pattern:

- Multiple tiers.
- Tier performs specific tasks.
- Tier can be physically separated.
- Tiers aren't layers.
- Cross-technical boundaries are not functional.

**3-Tier**

- Presentation tier.
  - UI and UI logic.
- Business logic tier.
  - Business logic
- Data tier.
  - Database

**Advantages:**

- Independent development.
- Scalability

**Disadvantages:**

- Changes ripple through tiers

### Service-oriented Pattern:

- Multiple services.
- Each service is a business activity.
- Service composability.
- Contract standardization.
- Enterprise service bus.

**Advantages:**

- Services are loosely coupled.
- Scalability.
- No duplication of functionality.

**Disadvantages:**

- Reduce agility and team autonomy.
- costly
- Many different views.

### Microservices Pattern:

- Multiple services.
- Each service is a business activity.
- Team runs the service.
- No logic-heavy enterprise service bus.
- Maximum automation like test and deployment.

**Advantages:**

- Services are loosely coupled and scalable.
- Increase agility.
- Reliablity.
- Designed to handle failures.

**Disadvantages**

- Boundaries are not always clear.
- Communication patterns can become complex.

### Serverless Pattern:

- Backend as a service.
- Function as a service.

**Advantages:**

- Scaling very easily.
- Cost reduction.

**Disadvantages:**

- Vendor can stop supporting the current framework version.
- It's tricky to maintain the state in memory.
- It suffers from a concept called cold starts.

### Peer-to-Peer Pattern:

- No central server.
- No constant connection.
- Dynamically discoverable.

**Advantages:**

- Cost effective.
- Sharing resources.
- Easy scaling.

**Disadvantages:**

- Its has drawback.
- Possible security issues.
- Only for specific scenarios.
- Nontrivial to code.

## Application Structure Patterns

- Single executable.
- Can be part of a large application landscape.

### Layered Pattern:

The layer pattern contains five layers. Each layer has distinct responsibility.

- Presentation -> User Interface.
- Application -> Translation between UI and business.
- Business -> Business logic.
- Persistence -> Code to interact with the database.
- Data -> Database.

**Advantages:**

- Well-known among developers
- Easy to organize.

**Disadvantages:**

- Can lead to monolithic applications.
- Need to write lots of code.

### Microkernel Pattern:

It's also called plugin pattern. In this pattern, the application consists of a core logic that can be extended with plugins.

- Task Scheduler.
- Workflow.
- Data Processing.
- Browser extension.

**Advantages:**

- Flexibility.
- Clean separation.
- Separate teams possible.
- Add and remove functionality at runtime.

**Disadvantages:**

- Core API might not fit future plugins

### Command Query Responsibility Segregation (CQRS) Pattern:

This is a pattern where two entirely separate models in our applications.

- Two models: read/query and write/command.
- Allows for scenario-specific quires.
- Synchronization required.
- Different from event sourcing.

**Advantages:**

- Simpler read queries.
- Faster and more scalable read queries.
- Easier to communicate with stakeholders.

**Disadvantages:**

- Added complexity.
- Learning curve.
- Possibility of data inconsistencies.
- Eventual consistency.

### Event sourcing Pattern:

- Store events instead of the current state.
- Event = something that happened in the past.
- Rehydration or replay.

**Advantages:**

- Trace of events.
- Audit trail.
- Business language.
- Event replay.

**Disadvantages:**

- Replay and external system.
- Event structure changes.
- Snapshots

## User Interface Patterns

### Model view controller (MVS)

**Advantages:**

- Separation of concerns.
- Parallel development.
- Popular in web frameworks.

**Disadvantages:**

- Controllers can become bloated.

### Model view presenter (MVP)

**Advantages:**

- Great for desktop applications.
- Separation of concerns
- Testability.

**Disadvantages:**

- Presenters can be bloated.
- Desktop applications are less popular.

### Model view ViewModel (MVVM)

**Advantages:**

- Great for modern desktop and mobile applications.
- Separation of concerns.
- Testability.

**Disadvantages:**

- Overkill for simple user interfaces.
- More difficult to debug.

<br />

# Micro Service Patterns

- Smaller scoped unit of work.
- Focus on data, business, or functional domains.

## Decomposition Patterns

- Domain base.
- Business base.
- Atomic transaction base.
- Strangler Pattern.
- Sidcar Pattern.

## Integration Patterns

- Gateway Pattern.
- Process Aggregator Pattern.
- Edge Pattern.

## Data Patterns

- Single service database.
- shared service database.
- Command Query Responsibility Segregation.
- Asynchronous eventing.

## Operational Patterns

- Log Aggregation Pattern.
- Metrics Aggregation Pattern.
- Tracing Pattern.
- External Configuration.
