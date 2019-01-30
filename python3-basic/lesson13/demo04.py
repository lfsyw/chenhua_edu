import demjson

str = demjson.encode({'name':'陈华','age':20})

print(str)


dict = demjson.decode(str)

print(dict)



