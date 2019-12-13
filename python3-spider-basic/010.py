import re

pattern = '[\s,，|]'
replace_string = ','
string = 'java，python|php|go'

res = re.subn(pattern, replace_string, string, count=2)
print(res)

#tag: java python,php，go
# java,python,php,go

