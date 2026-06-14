#!/bin/bash

DATE=$(date +%Y-%m-%d_%H-%M)

DEST="/home/adminA/backup"
mkdir -p "$DEST"

# WEBOLDAL mentés
tar -czf "$DEST/web_$DATE.tar.gz" /var/www/html

# (ha van fájlmegosztás, ez is)
tar -czf "$DEST/files_$DATE.tar.gz" /srv/samba

# ellenőrzés
if [ $? -eq 0 ]; then
    echo "Mentés sikeres"
else
    echo "Hiba történt"
fi
