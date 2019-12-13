import re

pattern = 'Python'
string = 'Python是最好的编程语言，python 没有之一'

obj = re.match(pattern,string)

if(obj==None):
    print('没有匹配项')
else:
    print('有匹配项')

