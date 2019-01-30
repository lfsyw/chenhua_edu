times = 0

def fun1():
	global times
	times += 1
	if(times>=10):
		return
	print('this is fun1')
	fun1()

def fun2():
	print('this is fun2')


fun1()
