import re
from urllib import request

def getInfo(url):
    #url = 'http://quote.cfi.cn/gsda/870/600004.html'
    obj = request.urlopen(url)
    html = obj.read().decode('utf-8')

    table_pattern = "<table class='vertical_table'>.*?</table>"
    table_obj = re.search(table_pattern, html, flags=re.S)
    table_html = table_obj.group()

    with open('1.html','w') as file:
        file.write(table_html)

    td_pattern = "<td(?:\sstyle='word-break:\sbreak-all;')?>(.*?)</td>"
    td_obj = re.findall(td_pattern, table_html)
    return td_obj[0], td_obj[1]

company_list = [
    'http://quote.cfi.cn/gsda_nq/10280/430047.html',
    'http://quote.cfi.cn/gsda/887/600036.html',
    'http://quote.cfi.cn/gsda/870/600004.html',
    'http://quote.cfi.cn/gsda/956/600116.html',
    'http://quote.cfi.cn/gsda/912/600071.html',
    'http://quote.cfi.cn/gsda/1004/600173.html',
]

for i in company_list:
    try:
        company_name,city = getInfo(i)
        print(company_name,city)
    except Exception as e:
        print(e)