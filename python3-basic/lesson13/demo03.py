import json

str = '{"name": "\u9648\u534e", "age": 20}'

dict = json.loads(str)
print(dict)
print(type(dict))

