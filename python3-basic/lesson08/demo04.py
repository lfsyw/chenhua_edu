import random

m = int(random.uniform(0,11))
n = int(input('请输入一个10以内的整数：'))

while m!=n:
	if(m<n):
		print('你猜大了，请重试：')
	else:
		print('你猜小了，请重试：')
	n = int(input('请输入一个10以内的整数：'))
else:
	print('恭喜你，猜对了，随机数是：' + str(m))



