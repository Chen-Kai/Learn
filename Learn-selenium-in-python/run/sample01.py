import time
from selenium import webdriver

browser = webdriver.Chrome()
browser.get('http://www.google.com')

browser = webdriver.Firefox()
browser.get('http://www.google.com')
