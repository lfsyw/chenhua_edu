
def fun(name, *args):
	sum = 0
	for i in args:
		sum += i
	print(sum,name)

fun(1,2,3,4,5)



