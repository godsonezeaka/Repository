#Functions

# Functions are created using the def keyword

# Creating a function
def sayHello(name = 'John'):
    print('Hello', name)
    
# Cant execute function until called
sayHello('Brad') # calling the function

# Return a value
def getSum(num1, num2):
    total = num1 + num2
    return total

numSum = getSum(4,2)
print(numSum)

# Example to show strings and numbers are immutable
# This example, only changed within its scope

def addOneToNum(num):
    num = num + 1
    print('Value inside function: ', num)
    return

num = 5
addOneToNum(num)
print('Value outside function: ', num)

# Example to show lists and dictionaries are mutable
# the list changed inside the function scope

def addOneToList(myList):
    myList.append(4)
    print('Value inside function: ', myList)
    return

myList = [1,2,3]
addOneToList(myList)
print('Value outside function: ', myList)



