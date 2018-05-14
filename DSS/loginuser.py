#!C:\Python27\python.exe


# import MySQLdb
import cgi;
import cgitb;cgitb.enable()
print "Content-Type: text/html"
form = cgi.FieldStorage()
name= form.getvalue("name")
psw= form.getvalue("psw")
print("name:", name)
print("psw:",psw)
# connection = MySQLdb.connect(host= "localhost",
#                   user="root",
#                   passwd="",
#                   db="lng")
# cursor = connection.cursor()

# sql = ("SELECT * FROM usersignup") 
# cursor.execute(sql)
# print("\n fetch one:")
# res = cursor.fetchone()
# if res == data:
# 	print(res) 
# 	print("success")


# 	pass
# else : 
# 	print("failed")
