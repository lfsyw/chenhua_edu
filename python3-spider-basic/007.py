import re

pattern = '[A-Z]+'
string = 'php是最好的编程语言，python 没有之一'

res = re.finditer(pattern, string)

for i in res:
    print(i.group())