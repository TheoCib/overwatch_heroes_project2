#Overwatch Heroes Rating Project
========================
Ce projet propose un système de notation et de commentaires sur les héros du jeu vidéo Overwatch de Blizzard ®.


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