import re

# pattern = '[A-Z]+'
# string = 'php是最好的编程语言，python 没有之一'
#
# obj = re.findall(pattern, string, flags=re.I)
# print(obj)



# pattern = '^[A-Z]+'
# string = '''php是最好的编程语言，
# python 没有之一'''
#
# print(string)
#
# obj = re.findall(pattern, string, flags=re.I|re.M)
# print(obj)


#
# pattern = 'php.*?java'
# string = '''php是最好的编程语言，
# python 没有之一 java'''
#
# obj = re.findall(pattern, string, flags=re.S)
# print(obj)



pattern = 'p    h p'
string = '''php是最好的编程语言，python 没有之一'''

obj = re.findall(pattern, string, flags=re.X)
print(obj)