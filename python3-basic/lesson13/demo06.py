import hashlib

sha1 = hashlib.sha1()

sha1.update('chenhua'.encode('utf-8'))
sha1.update('xxxx'.encode('utf-8'))

strsha1 = sha1.hexdigest()

print(strsha1)
print(len(strsha1))


