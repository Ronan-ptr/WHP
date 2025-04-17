import mysql.connector

mydb = mysql.connector.connect(
    host = "localhost"
    user = "root"
    password = "root"
    database = "TEST"
)


mycursor = mydb.cursor()

# mycursor.execute("SELECT * FROM TBTest")

mycursor.execute("INSERT INTO `TBTest` (`nom`, `iso`, `web`) VALUES ('TETS 2', 'ISO 2', 'WEB 2')")

