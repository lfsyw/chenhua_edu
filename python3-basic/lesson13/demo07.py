import hashlib

user_info = {
	'admin':'7fef6171469e80d32c0559f88b377245',
	'chenhua':'e10adc3949ba59abbe56e057f20f883e'
}

inp_name = input('请输入用户名：')

if(user_info.get(inp_name)==None):
	print('用户不存在')
	exit()
else:
	inp_pwd = input('请输入密码：')
	md5 = hashlib.md5()
	md5.update(inp_pwd.encode('utf-8'))
	md5_pwd = md5.hexdigest()
	if(md5_pwd == user_info.get(inp_name)):
		print('密码正确，登陆成功')
	else:
		print('密码错误，登录失败')




