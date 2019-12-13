import re

pattern = '[a-zA-Z]+' #0
string = '是最好的编程语言，python 没有之一'

obj = re.match(pattern,string)
if(obj == None):
    print('没有匹配项')
else:
    print(obj.group())
    print(obj.span()) #[0,4)
    print(obj.start())
    print(obj.end())
