def fun(arg,lst = None):
	if lst is None:
		lst=[]
	lst.append(arg)
	print(lst)

fun('a')
fun('b')


