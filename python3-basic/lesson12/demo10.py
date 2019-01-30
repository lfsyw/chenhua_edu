
def fun(n):
	if(n==1):
		return 1
	return n*fun(n-1)

sum = fun(6)
print(sum)

