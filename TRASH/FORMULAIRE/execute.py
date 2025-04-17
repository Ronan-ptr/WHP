import cgi

form = cgi.FieldStorage()
# Ici, vous pouvez ajouter votre code Python à exécuter
print("Content-type:text/html\r\n\r\n")
print("<html>")
print("<head>")
print("<title>Script exécuté</title>")
print("</head>")
print("<body>")
print("Le script Python a été exécuté avec succès !")
print("</body>")
print("</html>")