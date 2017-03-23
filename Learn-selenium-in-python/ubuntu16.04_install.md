#Learn-selenium-in-python
====================

OS : Ubuntu16.04


安裝與執行環境 JAVA
------------

* sudo apt-get install default-jdk <br /> 

<img width="829" alt="step1_install_jdk" src="https://cloud.githubusercontent.com/assets/1900906/23778772/409b5be0-0577-11e7-89be-e4fbbb4594cb.png">

* change to the directory you want. <br /> 
 
* sudo wget http://selenium-release.storage.googleapis.com/3.0/selenium-server-standalone-3.0.0.jar <br /> 

<img width="828" alt="step2_download_jar_done" src="https://cloud.githubusercontent.com/assets/1900906/23778799/6ca16ca2-0577-11e7-9f93-1485f6b7b9ae.png">


* java -jar selenium-server-standalone-3.2.0.jar <br /> 


安裝 Python 與 Selenium 環境
------------

* sudo apt-get install python-pip <br /> 

* sudo pip install -U selenium <br /> 

<img width="829" alt="step3_2" src="https://cloud.githubusercontent.com/assets/1900906/23778904/1c2bf796-0578-11e7-843b-ccdf1230c846.png">


* change to the project's directory. <br /> 


下載 Python 與 Selenium 專案
------------

到該網址 <br /> 

* https://pypi.python.org/pypi/selenium  <br /> 

<img width="1411" alt="step4" src="https://cloud.githubusercontent.com/assets/1900906/23778942/4b42f2d2-0578-11e7-8982-9bacf0900f39.png">

下載專案 <br /> 

* change to the project's directory. <br /> 

* python setup.py install <br /> 


Install Browser Driver 
------------

[Chrome]  
* https://sites.google.com/a/chromium.org/chromedriver/downloads <br /> 
* sudo mv chromedriver /usr/local/bin <br /> <br /> 

[Firefox] 
* https://github.com/mozilla/geckodriver/releases <br /> 
* sudo mv geckodriver /usr/local/bin <br /> 


參考連結
------------
http://seleniumhq.github.io/selenium/docs/api/py/ <br /> 
https://pypi.python.org/pypi/selenium <br /> 
