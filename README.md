## Factory Method Pattern Example (OOP)

We are sharing some simple PHP code, showing the use of
the [Factory Method Pattern](https://en.wikipedia.org/wiki/Factory_method_pattern) to define the steps to prepare
specific pizzas at a pizza store. You will see how modern versions of PHP, supporting Classes, Abstract Classes,
Interfaces and Enumerators, make it easy to implement the Factory Method Pattern using this language.

You can find the PHP 8.1 code
at [/app/src](https://github.com/harryrampr/OOP_Factory_Method-Pizza_Store_Example/tree/master/app/src), there is
testing at [/tests](https://github.com/harryrampr/OOP_Factory_Method-Pizza_Store_Example/tree/master/app/tests)
directory. HTML output with Tailwind CSS can be found
at [/app/public](https://github.com/harryrampr/OOP_Factory_Method-Pizza_Store_Example/tree/master/app/public) directory.

### About the Pattern

The Factory Method is a creational design pattern in object-oriented programming (OOP) that provides an interface for
creating objects, but allows subclasses to decide which class to instantiate. It is also known as the Virtual
Constructor.

### History

The concept of the Factory Method pattern can be traced back to the 1980s, when object-oriented programming was gaining
prominence. During this time, software developers recognized the need for a flexible and reusable approach to object
creation. The Factory Method pattern emerged as a solution to this problem.

The Factory Method pattern was first formally described in the
book ["Design Patterns: Elements of Reusable Object-Oriented Software"](https://en.wikipedia.org/wiki/Design_Patterns),
published in 1994 by Erich Gamma, Richard Helm, Ralph Johnson, and John Vlissides (also known as the "Gang of Four" or
GoF). This book introduced the concept of design patterns, including the Factory Method pattern, and provided a
comprehensive catalog of design patterns that continue to be widely referenced and used today.

### Intent

The Factory Method pattern is used to create objects without specifying the exact class of the object that will be
created. It allows for flexibility and decoupling by delegating the responsibility of object creation to subclasses.

### Structure

The main components of the Factory Method pattern are the abstract creator, concrete creators, abstract product, and
concrete products. The abstract creator defines the factory method that subclasses implement to create objects. The
concrete creators inherit from the abstract creator and provide the implementation for the factory method. The abstract
product defines the interface of the products that can be created, and the concrete products implement the abstract
product.

### How it Works

Clients of the Factory Method pattern call the factory method declared in the abstract creator. This method is
responsible for creating the concrete product, but it lets the subclass decide which specific product class to
instantiate. This allows for creating different product variations by extending the abstract creator and providing the
appropriate implementation of the factory method in each subclass.

### Benefits

- Provides a way to encapsulate object creation and decouple it from the client code.
- Allows for the introduction of new product variants without modifying existing client code.
- Promotes the [Open-Closed Principle](https://en.wikipedia.org/wiki/Open%E2%80%93closed_principle), as new product
  types can be added by creating new subclasses without modifying existing code.

### Applications

- **Framework Development:** Frameworks often use the Factory Method pattern to provide a way for users to create
  objects within the framework. For example, a web development framework may have a factory method that creates
  different types of database connections or a logging framework that provides a factory method to create different
  types of loggers.

- **Dependency Injection:** Dependency injection containers or frameworks use the Factory Method pattern to instantiate
  and provide instances of objects to the requesting components. The factory method can be used to handle the complex
  instantiation process and manage the dependencies of the objects being created.

- **Plugin Systems:** Plugin systems that allow the dynamic loading and extension of functionality often employ the
  Factory Method pattern. The plugin system can define a factory method that plugin developers implement to create
  instances of their plugins, enabling the system to instantiate and integrate the plugins seamlessly.

- **Testing:** In unit testing, the Factory Method pattern can be useful for creating mock objects or test doubles. The
  factory method can generate instances of mock objects or stubs that mimic the behavior of the real objects, allowing
  for isolated and controlled testing scenarios.

- **Localization and Internationalization:** The Factory Method pattern can be applied in localization and
  internationalization scenarios. A factory method can be used to create instances of localized objects, such as
  resource bundles or language-specific components, based on the user's locale or language preferences.

- **Object-Creation Variations:** The Factory Method pattern allows for creating different variations of objects without
  modifying the existing codebase. It enables the introduction of new product types or variations by extending the
  factory and providing the appropriate implementation of the factory method. This is useful in scenarios where
  different object configurations or behaviors are required based on specific conditions or user preferences.

### Other Examples

A common example is a framework that provides an abstract class for creating database connections. The framework defines
an abstract creator with a factory method called createConnection(). Subclasses of the abstract creator (
e.g., [MySQLConnectionCreator](https://docs.oracle.com/middleware/1213/jdev/api-reference-esdk/oracle/jdeveloper/db/adapter/MySQLConnectionCreator.html),
OracleConnectionCreator) implement the createConnection() method to return the appropriate concrete product (e.g.,
MySQLConnection, OracleConnection).

Overall, the Factory Method pattern enables flexibility in object creation by providing a consistent interface for
clients while deferring the decision of which specific class to instantiate to subclasses.