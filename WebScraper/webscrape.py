'Web Scraping Automated Script'
'Authored by Godson Ezeaka'
''''Description: This script scrapes USPN website for top player
    career stats and puts in desired format,
    creating a file for each player'''
'Date: 2/27/2018'

# Need to get url for web scraping which would involve getting a client
from urllib.request import urlopen as uReq # webclient for scraping data from web
from bs4 import BeautifulSoup as soup # package for parsing html data

'--------------------------------FUNCTIONS------------------------------'

# This function does the page scraping
# Pre: You need url for the page, year and filename
# Post: Scrapes page and writes to respective file
def scrape_page(my_url, yearStr_from_url, filename):
    
    uClient = uReq(my_url) # open up connection and download entire page, stores it in uClient

    page_html = uClient.read() # reads the whole entire page as html and stores in variable

    uClient.close() # closes the connection

    # NEED TO PARSE HTML, THIS IS WERE SOUP COMES IN
    # tell it how to parse it, in this case an html parser and store it
    page_soup = soup(page_html, "html.parser") 
    
    # Filename to read
    fo = open(filename, "a")
    
    '''now, all you need to do is traverse the dom elements of the html page
    look for a pattern and basically parse through the DOM by looping'''
    
    containers = page_soup.findAll("div", {"id":"player-stats"})
    
    for container in containers:
        tr_container = container.findAll("tr")
        for i in range(0, len(tr_container)):
            if i == 0:
                anchors = tr_container[i].findAll("a", {"href":"#"})
                for i in range(0, len(anchors)):
                    if(i == len(anchors) -1):
                        print(anchors[i].text + ", " + yearStr_from_url + "", end="\n") # debug
                        fo.write(anchors[i].text + ", " + yearStr_from_url +  "\n")
                    else:
                        print(anchors[i].text + ", ", end="") # debug
                        fo.write(anchors[i].text + ", ")
            else:
                tableData = tr_container[i].findAll("td")
                for i in range(0, len(tableData)):
                    if(i == len(tableData) -1):
                        print(tableData[i].text + "", end="\n") # debug
                        fo.write(tableData[i].text + "" + "\n")
                    else:
                        print(tableData[i].text + ", ", end="") # debug
                        fo.write(tableData[i].text + ", ")
    fo.close()
                        
''' There should be one filename for each player(url). Files should be in csv format preferrably
    look at playerData.txt for an example'''

# Narrative: Read in urls and filenames from playerData.csv
# Pre: Need player data file available to be read. 
# Post: Creates a list of filenames and urls based on player data
def read_player_data():
    filenames = []
    urls = []
    fo = open('playerData.txt', 'r+') # Read in using 'r+'
    for line in fo:
        current_line = line.split(",")
        filenames.append(current_line[0].strip())
        urls.append(current_line[1].strip())
        
    return filenames, urls
'--------------------------------------------------------------------------------------------------'


'----------------------------MAIN DRIVER-------------------------------------------------------------'

filenames, urls = read_player_data()

for i in range(0, len(urls)):
    done = False
    while not done:
        # extract the year from url and turn it to a Number, num
        url = urls[i]
        yearStr_from_url = url[-4:]
        
        yearAsInt = int(yearStr_from_url)
        if(yearAsInt <= 2017):
            scrape_page(urls[i], yearStr_from_url, filenames[i])
            yearAsInt = yearAsInt + 1
            yearStr = str(yearAsInt)
            
            # modify url to end with yearStr
            urls[i] = urls[i].replace(yearStr_from_url, yearStr)
        else:
            done = True
'-----------------------------------------------------------------------------------------------------'
