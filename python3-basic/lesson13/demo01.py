import time

#print(time.time()) #获取当前时间戳

#print(time.localtime()) #获取时间元组 完整的时间格式

#print(time.asctime()) #简单的可读形式  星期 月 日 时间 年

#print(time.strftime('%Y-%m-%d %H:%M:%S'))

#print(time.strptime('2018-01-30 08:43:35','%Y-%m-%d %H:%M:%S'))

print(time.mktime(time.strptime('2018-01-30 08:43:35','%Y-%m-%d %H:%M:%S')))



