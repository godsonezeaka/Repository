'''
    There are basically three types of conditionals
    -if, if-else, elif (basically an else if). Note, no switches in python
'''

''' Basic if statement and syntax. Not like your usual coding in java or c++ or javascript
    where you can omit if parenthesis. it is optional, but just put it anyways, esp when
    you have multiple conditionals.
    Indent is also very important. Also at the end of the conditional, end it with a ':'
'''

x = 4

# Basic If statement
if x < 6:
    print("This is true")
    
# If else
if x < 6:
    print('This is true')
else:
    print('This is false')
    
# Elif
color = 'red'

if color == 'red':
    print('Color is red')
elif color == 'blue':
    print('Color is blue')
else:
    print('Color is not red or blue')
    
# Nested if
if color == 'red':
    if x < 10:
        print('Color is red and x is less than 10')
        
# Obviously last if statement can be used using logical operators
if (color == 'red' and  x < 10) :
    print('Color is red and x is less than 10')
    

    