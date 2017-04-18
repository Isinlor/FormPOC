
Symfony Forms Pros:
+ CSRF
+ Structure
+ Auto Mapping
+ Build-in Types (reusability)
+ HTML Generation
+ HTML Templates
+ Validation

Symfony Forms Cons:
- complexity: 2 types of data transformers, data mapper, events
- dubious design:
- validation requires mapping
- mapping can not validate
- model data, normalised data, view data
- view data can be model data depending on compound option
- data mapper uses reference in input
- disabled forms are valid
- templates use custom twig nodes
- theming is very difficult to debug
- events are hard to debug

Design decisions to make:
? validation
? named factories
? form navigator: flat UUID vs. compostable semantic names
? mapping error messages? easy access to error messages trough navigator?