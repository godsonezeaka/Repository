# Loops - For and while loops
people = ['John', 'Sara', 'Tim', 'Bob']

for person in people:
    print('Current Person: ', person)
    
print('\n')
    
# Iterate by sequence Index
for i in range(len(people)):
    print('Current Person: ', people[i])
    
print('\n')
    
for i in range(0, 10):
    print(i)

# While Loop
count = 0
while count < 10:
    print('Count: ', count)
    count += 1 # no ++ in python, could have also done count = count + 1

print('\n')

# Breaks, continue and pass

'''Break would terminate out of the loop completely and goes to execute statement 
    immediately following the loop
    
    continue - ignores any statement after it and goes back to check condition 
    at the top of the loop
    
    pass - not really sure on this
'''

# Break
for i in range(0,10):
    print('i: ', i)
    break
    print("In Loop")
    
print("Outside Loop\n")

# Continue
for i in range(0,10):
    print('i: ', i)
    continue
    print("In Loop")
    
print('\n')
    
