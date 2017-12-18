# -*- coding: utf-8 -*-
import MySQLdb as mdb

conn = mdb.connect(host="ID211210_stash.db.webhosting.be",
                   user="ID211210_stash",
                   passwd="StashDB1!",
                   db="ID211210_stash")

cur = conn.cursor()

serialNr = '01234567892'

cur.execute("SELECT id FROM users WHERE serialNr = " + serialNr)
idResult = cur.fetchone()
idString = '%d' % (idResult[0])
print(idString)


cur.execute("SELECT * FROM barcodes WHERE user_id = " + idString)
rows = cur.fetchall()
barcodes=[]
for row in rows:
    barcodes.append(row[1])

print(barcodes)

incode = input('scan de barcode aub: ')
#barcode = 5029053040004 #dit moet uit een database komen
strscan = '%d' % (incode)
print (strscan)

for barcode in barcodes:
    print (barcode)
    if strscan == barcode: #hier moet gechecked worden of de ingescande barcode overeenkomt met één uit de database
        
        cur.execute("UPDATE barcodes SET is_delivered = 1 WHERE barcode = " + strscan)
        conn.commit()
        
        print ('code valid')
        #print(strscan)
        break
    else:
        print ('code invalid')
