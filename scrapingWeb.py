import requests
from bs4 import BeautifulSoup

def get_data(url):
    html_text = requests.get(url).text
    soup = BeautifulSoup(html_text, 'html.parser')
    
    numCountry = soup.find("a", {"class": 'country-name'})
    for child in numCountry.children:
        print(child)
    
    print(numCountry)


while True:
    url = "https://datos.bancomundial.org/indicator/NY.GDP.MKTP.CD"
    if url == '':
        break
    print(get_data(url))
