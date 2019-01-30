
list1 = [12,15,71,34,55,67,89]

odd = []
even = []

while len(list1)!=0:
	item = list1.pop()
	if(item%2==0):
		even.append(item)
	else:
		odd.append(item)
else:
	print(even,odd)
