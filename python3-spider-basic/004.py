import re

pattern = 'python'
string = 'php是最好的编程语言，python 没有之一'

obj1 = re.match(pattern, string)
obj2 = re.search(pattern, string)

print(obj1,obj2)
print(obj2.group())
