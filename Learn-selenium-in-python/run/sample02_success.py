import unittest
from selenium import webdriver
from selenium.webdriver.common.keys import Keys

class googlesearch(unittest.TestCase):

	def setUp(self):
		self.driver = webdriver.Firefox()

	def test_search_in_google_search(self):
		driver = self.driver
		driver.get("http://www.google.com.tw/")
		ele = driver.find_element_by_name("q")
		ele.clear()
		ele.send_keys("kay")

		driver.find_element_by_name("btnK").click();

		assert "No results found." not in driver.page_source

	def tearDown(self):
		self.driver.close()

if __name__ == "__main__":
	unittest.main()
