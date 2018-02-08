# We can import modules. In this example we import the greet module

# Import the whole module
import greet

# If we wanted to only import a specific element from a module, we can do this
from greet import sayGoodBye

greet.sayHello('Tim')
greet.sayGoodBye('Tim')