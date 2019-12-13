import re

user_name = 'admin'
email = 'admin@ichenhua.cn'
mobile = '17600208288'
id_card = '420521199405061109'
name = '陈华'

if(re.match('^[a-zA-Z]\w{4,15}$',user_name) == None):
    raise Exception('用户名匹配不成功.')

if (re.match('^\w+@[a-zA-Z0-9]+\.[a-zA-Z]+$', email)== None):
    raise Exception('email匹配不成功.')

if (re.match('^1\d{10}$', mobile)== None):
    raise Exception('手机号匹配不成功.')

if (re.match('^\d{17}[\dX]$', id_card)== None):
    raise Exception('身份证匹配不成功.')

if (re.match('^[\u4e00-\u9fa5]+$', name)== None):
    raise Exception('姓名匹配不成功.')

print('验证通过')

# res = re.search('\d{6}(\d{8}).*',id_card)
# print(res.group(1))

date = id_card[6:14] #[6,14)
print(date)