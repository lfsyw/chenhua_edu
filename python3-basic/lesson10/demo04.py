import random

sys_list = ['石头','剪刀','布']

while True:
	#生成一个0-2的随机整数
	m = int(random.uniform(0,3))
	
	inp = input('请输入石头 剪刀 布，输入 end 结束：')
	if (inp not in sys_list) and inp!='end':
		print('输入有误，请重新输入：')
		continue
	elif inp=='end':
		break
	else:
		#取到输入值的索引
		n = sys_list.index(inp)
		print('电脑出拳：'+sys_list[m])
		if m==n:
			print('平局')
		elif (m==0 and n==1) or (m==1 and n==2) or (m==2 and n==0):
			print('电脑获胜')
		else:
			print('玩家获胜')
else:
	print('游戏结束')


