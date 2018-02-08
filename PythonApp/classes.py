# Classes and Objects
import email

# the __ basically specifies the access modifiers for the class fields. in this case it means private
class Person:
    __name = '' 
    __email = ''
    
    # Constructor, (__init__) called when the object is instantiated 
    def __init__(self, name, email):
        self.__name = name
        self.__email = email
    
    # self basically represents a reference to the particular class, just like "this" in C++
    def setName(self, name):
        self.__name = name
        
    def getName(self):
        return self.__name
    
    def setEmail(self, email):
        self.__email = email
        
    def getEmail(self):
        return self.__email
    
    def toString(self): # {} are placeholders used by the string.format()
        return '{} can be contacted at {}'.format(self.__name, self.__email)
    
print("Person Class")
    
person = Person("Godson Ezeaka", "test@email.com")

print(person.getName())
print(person.getEmail())
print(person.toString())
        
        
# Inheritance put the class you are inheriting from inside the parenthesis
class Customer(Person):
    __balance = 0
    
    def __init__(self, name, email, balance):
        super(Customer, self).__init__(name, email) # super just like java is the parent class
        self.__balance = balance
        
    def setBalance(self, balance):
        self.__balance = balance
    
    def getBalance(self):
        return self.__balance
    
    # Override the toString method in Person Class
    def toString(self):
        return Person.toString(self) + " with a balance of {}".format(self.__balance)
    
print("\nCustomer Class Inheriting From Person Class")
    
person2 = Customer('John Doe', 'john@gmail.com', 100)
print(person2.toString())
