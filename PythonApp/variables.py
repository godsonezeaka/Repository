# Variables and Data Types
greeting = 'Hello World' # assignment of variables

print(greeting)

# Data Types in Python - Numbers, String, List, Dictionary, Tuple
'''
    For Numbers you have:
    -int
    -long
    -float
    -complex
'''

# Numbers
myStr = 'Hello'
myInt = 25
myFloat = 1.3

# List
myList = [1,2,3,"Hello"]

#Dictionary, basically like an associate array, first is the key, second is the value
myDict = {'a':1, 'b':2, 'c':3}

# print types of variables and their variables using the type function

print(type(myStr), myStr)
print(type(myInt), myInt)
print(type(myFloat), myFloat)
print(type(myList), myList)
print(type(myDict), myDict)

print(myList[3])
print(myDict['a'])

print(myStr, 'World') # concatenates

# below is another form of concatenating using + 
greeting = myStr + ' World'
print(greeting)






