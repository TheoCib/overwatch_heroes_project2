#Overwatch Heroes Rating Project
========================
This Website is related to Blizzard® video games. You can mark and comment your favorites heroes, but also make them fight to know which one has the best average with our versus mode. Just go on your hero page, and select the one you want to compare with on the list. Our, if you don't want to choose, our random versus is also available !

Run project on local:

```bash
https://github.com/TheoCib/overwatch_heroes_project2
vagrant up
vagrant ssh
make install
make start
/!\set database_password from "null" to "ynov" in the file parameters.yml  /!\
make fixtures 
```

To connect as admin use admin@admin.com with the password "admin".
To connect as normal user, use user@user.com with the password "user" .

Enjoy!