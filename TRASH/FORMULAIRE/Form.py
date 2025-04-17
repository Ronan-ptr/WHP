import cgi
import sqlite3
import mysql.connector

# Récupérer les données du formulaire
form = cgi.FieldStorage()
nom = form.getvalue('nom')
iso = form.getvalue('ISO')
webDNS = form.getvalue('Web')

# MY SQL

# Se connecter à la base de données
conn = sqlite3.connect('TEST.db')

    # INFOS DB
    servername = 'localhost'
    username = 'root'
    password = 'root'
    dbname = 'TEST'
    tbname = 'TBTest'
    c1 = 'nom'
    c2 = 'iso'
    c3 = 'web'


cursor = conn.cursor()


# Insérer les données dans la table
cursor.execute("INSERT INTO `TBTest` (`nom`, `iso`, `web`) VALUES ('NOM N°2', 'ISO 2', 'WEB 2');")

# Valider les changements
conn.commit()

# Fermer la connexion
conn.close()

# Afficher un message de confirmation
print("Content-Type: text/html\n")
print("<html>")
print("<head><title>Données envoyées</title></head>")
print("<body>")
print("Les données ont été enregistrées avec succès.")
print("</body>")
print("</html>")