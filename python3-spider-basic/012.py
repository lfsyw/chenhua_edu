import re

pattern = '[a-z]+'
obj = re.compile(pattern)

res = obj.findall('python是最好的编程语言.java')
print(res)

res2 = obj.split('最好的编程语言是php,没有之一')
print(res2)