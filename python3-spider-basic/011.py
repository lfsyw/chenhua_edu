import re

pattern = '[\s,，|]'
string = 'java，python|php|go'

res = re.split(pattern, string, maxsplit=0)
print(res)

#tag: java python,php，go
# [java,python,php,go]



