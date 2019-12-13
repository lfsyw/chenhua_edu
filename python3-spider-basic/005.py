import re

pattern = '[0-9]+'
string = 'php是最好的编程语言，python 没有之一 java'

obj = re.findall(pattern, string)
print(obj)
