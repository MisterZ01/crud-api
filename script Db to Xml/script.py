import mysql.connector
import xml.etree.ElementTree as ET

# Connect to the database
cnx = mysql.connector.connect(user='root', password='',host='localhost', database='apitest')

# Get a cursor
cursor = cnx.cursor()

# Query all tables in the database
cursor.execute("SHOW TABLES")

# Get the table names
tables = [table[0] for table in cursor.fetchall()]

# Create the root element of the XML document
root = ET.Element("root")

# Loop through each table
for table in tables:
    # Execute a query to get the data
    cursor.execute("SELECT * FROM %s" % table)
    data = cursor.fetchall()
    
    # Create an element for the table
    table_element = ET.SubElement(root, table)
    
    # Loop through each row of data
    for row in data:
        # Create an element for the row
        row_element = ET.SubElement(table_element, "row")
        
        # Loop through each column in the row
        for i, column in enumerate(row):
            # Create an element for the column
            column_element = ET.SubElement(row_element, "column%d" % i)
            column_element.text = str(column)

# Write the XML to a file
tree = ET.ElementTree(root)
tree.write("data.xml")
cursor.close()
cnx.close()