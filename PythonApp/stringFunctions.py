# String functions
myStr = 'HelloWorld'

# Capitalize
print(myStr.capitalize())

# Swap case
print(myStr.swapcase())

# Get length
print(len(myStr))

# Replace 
print(myStr.replace('World', 'Everyone'))

#Count - allows you to count the number of occurrences of a substring in a given string
sub = 'l'
print(myStr.count(sub))

# Starts with and ends with
print(myStr.startswith('Hello'))
print(myStr.endswith('World'))

# Split to list
print(myStr.split())

# Find
print(myStr.find('e'))
print(myStr.find('z')) # Returns -1 if character not found

# Index

print(myStr.index('e')) # Same with a find but less safe because it gives error when char cant be found
# For example, print(myStr.index('x')) will give an error

# Is all alphanumeric
print(myStr.isalnum())

# Is all alphabetic
print(myStr.isalpha())

# Is all numeric
print(myStr.isnumeric())


