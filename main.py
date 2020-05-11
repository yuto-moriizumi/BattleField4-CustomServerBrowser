from selenium.webdriver.chrome.options import Options
from selenium import webdriver
import json

print('Content-type: text/html\nAccess-Control-Allow-Origin: *\n')
print("\n\n")
#print(json.JSONEncoder().encode({"a": "aaa", "b": "bbb"}))
# print('\n')


options = Options()
# cromedriverの所在パス
path = "C:\Program Files (x86)\chromedriver.exe"
options.add_argument('--window-size=1024,768')
options.add_argument('--blink-settings=imagesEnabled=false')
driver = webdriver.Chrome(executable_path=path, chrome_options=options)
url = 'https://battlelog.battlefield.com/bf4/ja/servers/pc/?filtered=1&expand=1&settings=&useLocation=1&useAdvanced=1&gameexpansions=-1&slots=1&slots=2&slots=4&q=&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&gameexpansions=-1&mapRotation=-1&modeRotation=-1&password=-1&regions=32&osls=-1&vvsa=-1&vffi=-1&vaba=-1&vkca=-1&v3ca=-1&v3sp=-1&vmsp=-1&vrhe=-1&vhud=-1&vmin=-1&vnta=-1&vbdm-min=1&vbdm-max=300&vprt-min=1&vprt-max=300&vshe-min=1&vshe-max=300&vtkk-min=1&vtkk-max=99&vnit-min=30&vnit-max=86400&vtkc-min=1&vtkc-max=99&vvsd-min=0&vvsd-max=500&vgmc-min=0&vgmc-max=500'
driver.get(url)
trs = driver.find_elements_by_tag_name('tr')
for tr in trs:
    tds = tr.find_element_by_tag_name('td')
    for td in tds:
        print(td.text)
