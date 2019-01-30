import random

sys_list = ['石头','剪刀','布']


while True:
	inp = input('请输入石头剪刀布或者end结束：')
	
	#生成一个0-2的随机整数
	m = int(random.uniform(0,3))
	
	if (inp not in sys_list) and (inp!='end'):
		print('您输入的内容不合法，请重新输入！')
	elif inp=='end':
		print('游戏结束')
		break
	else:
		n = sys_list.index(inp)
		print('电脑出拳：'+sys_list[m])
		if m==n:
			print('平局')
		elif (m==0 and n==1) or (m==1 and n==2) or (m==2 and n==0):
			print('电脑获胜')
		else:
			print('玩家胜利')	



