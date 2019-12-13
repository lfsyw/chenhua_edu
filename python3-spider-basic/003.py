import re

pattern = '(?P<user>.*)@(?P<domain>.*)\.(?P<ext>.*)'
string = 'admin@ichenhua.cn'

obj = re.match(pattern,string)
if(obj == None):
    print('没有匹配项')
else:
    #print(obj.group())
    #print(obj.group(2))
    #print(obj.groups())
    print(obj.groupdict())
    print(obj.groupdict()['user'])
