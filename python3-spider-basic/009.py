

import re

def changeNum(o):
    num = int(o.group())
    re_string = '〇一二三四五六七八九'
    return re_string[num]

pattern = '\d'
string = '2019年12月12日'

res = re.sub(pattern, changeNum, string)
print(res)

