import hashlib

md5 = hashlib.md5()

md5.update('chen'.encode('utf-8'))
md5.update('hua'.encode('utf-8'))
md5.update('adfdsfdsf'.encode('utf-8'))

strmd5 = md5.hexdigest()

print(strmd5)

print(len('f45ac72de84b4c0ddf41c56f5d1aa5bb'))



