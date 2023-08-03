# Design Patterns

## [SOLID design principles](https://github.com/tarekmonjur/design-patterns/blob/master/solid-principles/readme.md)

<br />

# Software Architect

* keep many different components in your mind.
* Have a rudimentary knowledge of how they all work.
* Software architects focus on the big picture.
* High-level understanding.

### Best Architects
The best architects aren't dictators, they are teachers.
* Work with developers.
* Understand the facts.
* Guide the team to a solution.
* Lead developers to the right decisions.
* Work with their teams.
* Need a motivated team to do their best work.
* Leverage the experience of the team.
* Train, encourage, and energize the team members.

<br />

# Micro Service Pattern
* Smaller scoped unit of work.
* Focus on data, business, or functional domains.

## Decomposition Pattern
* Domain base.
* Business base.
* Atomic transaction base.
* Strangler Pattern.
* Sidcar Pattern.

## Integration Pattern
* Gateway Pattern.
* Process Aggregator Pattern.
* Edge Pattern.

## Data Pattern
* Single service database.
* shared service database.
* Command Query Responsibility Segregation.
* Asynchronous eventing.

## Operational Pattern
* Log Aggregation Pattern.
* Metrics Aggregation Pattern.
* Tracing Pattern.
* External Configuration.

<br>

# Software Architecture Pattern

## Application Landscape Patterns
* Single application to the end user.
* Multiple applications behind the scenes are possible.

### Monolith Pattern:
**Advantages:**
* Simple architecture.
* Easy to understand, implement, and test.
* Easy Deployment.
* Ideal for limited scope.

**Disadvantages:**
* Tight coupling.
* Easily leads to complex code.
* One size fits all for every subdomain.

### N-tier Pattern:
* Multiple tiers.
* Tier performs specific tasks.
* Tier can be physically separated.
* Tiers aren't layers.
* Cross-technical boundaries are not functional.

**3-Tier**
* Presentation tier.
  * UI and UI logic.   
* Business logic tier.
  * Business logic
* Data tier.
  * Database
 
**Advantages:**
* Independent development.
* Scalability

**Disadvantages:**
* Changes ripple through tiers

### Service-oriented Pattern:
* Multiple services.
* Each service is a business activity.
* Service composability.
* Contract standardization.
* Enterprise service bus.

**Advantages:**
* Services are loosely coupled.
* Scalability.
* No duplication of functionality.

**disadvantages:**
* Reduce agility and team autonomy.
* costly
* Many different views.

### Microservices
* Multiple services.
* Each service is a business activity.
* Team runs the service.
* No logic-heavy enterprise service bus.
* Maximum automation like test and deployment.

**Advantages:**
* Services are loosely coupled and scalable.
* Increase agility.
* Reliablity.
* Designed to handle failures.

**Disadvantages**
* Boundaries are not always clear.
* Communication patterns can become complex. 

### Serverless

### Peer to Peer

## Application Structure Patterns
* Single executable.
* Can be part of a large application landscape.

### Layered
### Microkernel
### Command Query Responsibility Segregation (CQRS)
### Event sourcing

## User Interface Patterns
### Model view controller (MVS)
### Model view presenter (MVP)
### Model view ViewModel (MVVM)
