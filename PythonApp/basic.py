# This is a single line comment

'''
    This is a multi line comment
    same here

'''

"""
    also we could do this, it is the same 
    thing for these type of comments.
    completely up to me to choose what type
"""

'''
    These two are valid, single and double quotes are the same
    although when using apostrophe in your string, use double quotes
'''
print("Hello World")
print('Hello World')

# Triple Quotes. These allow for printing multi-line strings

# Below wont work
'''print("This is basically saying
      It's actually two statements on the same line, but the second one is an empty statement. 
      There is no point to doing this)'''

# Much better way of doing it is using the triple quotes
print('''This is basically saying
      It's actually two statements on the same line, but the second one is an empty statement. 
      There is no point to doing this''')

# Double triple quotes work as well!
print("""This is basically saying
      It's actually two statements on the same line, but the second one is an empty statement. 
      There is no point to doing this""")

# Semi colons are not needed after a line, a waste of execution!

# Substrings
print('Hello'[0]) # zero based

# to get more than one character
print("Hello"[0:3]) # gets Hel from Hello where first number is pos and second is len of substr

# print plain numbers
print(2)

# also can print multiple data types. just separate by comma
print(1,2,3,'Hello') # this would print all one line

# To do last statement on multiline, use end line character
print('line1\nline2\nline3')

# this only includes one backslash, to force it to include two, pur an r in front of statement
print('C:\\somewhere') 

#like this
print(r'C:\\somewhere') 
print

