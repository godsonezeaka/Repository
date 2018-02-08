# Open a file
fo = open('test.txt', 'w')

#Get some info
print('Name: ', fo.name)
print('Is Closed: ', fo.closed)
print('Opening mode: ', fo.mode)

# Write to a file
fo.write('I love Python')
fo.write(' and JavaScript')

fo.close()

# Overwrites contents in file, does not tack on!
'''fo = open('test.txt', 'w')
fo.write('I also love PHP')'''

# To tack on to it, you want to open the file, in append mode 'a'
fo = open('test.txt', 'a')
fo.write(' I also love PHP')
fo.close()

# Read from a file
fo = open('test.txt', 'r+') # Read in using 'r+'
text = fo.read(10) # Would only give first 10 characters, to read entirely from the file, just call read()
print(text)
fo.close()


# Create a file
fo = open('test2.txt', 'w+') # w+ allows us to create the file
fo.write('This is my new file')
fo.close()
