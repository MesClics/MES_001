I.- Pré-requis :
Ce kit est prévu pour une insertion dans une page index.php, qui elle même se trouverait dans le dossier controller du site selon une architecture MVC (contenant un dossier ../Model, un dossier ../view et un dossier ../controller).
Pour une utilisation de ce kit en-dehors de ce modèle il faudarit modifier les chemins d'accès à l'intérieur des différents fichiers (dans les include() comme dans les header()).

Déposer le contenu du dossier controller du module dans le dossier controller du site, le contenu du dossier model du module dans le dossier model du site, le contenu du dossier view du module dans le dossier view du site.

Pour utiliser ce kit permettant la création d'un espace membres, il faut avoir une table nommée "users" dans une base de données MySQL. Le fichier users.sql joint au dossier permet l'insertion d'une telle table.
La table users doit contenir les champs suivants :
    - id (int, clé primaire)
    - login (varchars)
    - mail (varchars)
    - password (varchars)
    - sign_up_date (datetime)
    - category (varchars)
    - newsletter (booléen)
    - last_update (datetime)
    - last_visit (datetime)

Il faut également un fichier de connexion à la base de données nommé database_connection.php.

Les fichiers suivants doivent être complétés afin de permettre une intégration parfaite du module dans le site :

../controller/account.php (-> Page "Mon compte" indépendante)

II.- Les modules :
    Le log : permet la connexion des utilisateurs au site (gâce à un formulaire de connexion/désinscription/connexion) ainsi qu'un lien vers une page "Mon compte". Pour l'insérer dans le code il suffit de copier le code suivant à l'emplacement souhaité (dans le header d'une page index par exemple) : 
        include('../controller/log.php')
        
    L'account : c'est la page "Mon compte" que l'on peut rendre disponible pour les utilisateurs. Elle permet à l'utilisateur de changer son identifiant, son mot de passe, son adresse mail, de gérer son abonnement à la newsletter, de se désinscrire. Pour l'insérer dans e code il suffit de copier le code suivant à l'emplacement souhaité :
        include('../controller/account.php')
        
    L'users_panel : c'est le panneau d'administration des utilisateurs. Il donne accès à la gestion des utilisateurs, des groupes d'utilisateurs, des droits d'accès et àune fonction d'envoi d'email aux utilisateurs. Pour l'insérer à l'emplacement souhaité copier le code suivant :
        include('../controller/users_panel.php')

III.- Les classes :

    - User
        __construct vide
        
        //fonctions générales
        InsertNewUser(login,email,password)
            > l'id est automatique et la catégorie par défaut est définie comme "user"
        RemoveUserfromId (id)
        SetAllfromIdinDatabase(id)
        
        //fonctions sur l'id
            getId()
            CollectAllfromIdinDatabase(id)
            getIdfromLogininDatabase(login)
            setId(new id)
        
        //fonctions sur le login
            getLogin()
            CollectAllfromLogininDatabase(id)
            getLoginfromIdinDatabase(id)
            setLogin(new login)
            setLoginfromIdinDatabase(id, new login)
        
        //fonctions sur l'email
            getEmail()
            CollectAllfromEmailinDatabase(email)
            setEmailfromIdinDatabase(id, new email)
        
        //fonctions sur le mot de passe
            getPassword()
            setPasswordfromIdinDatabase(id, new_password)
            getPasswordfromLogininDatabase(login)
        
        //fonctions sur la catégorie
            getCategory()
            getCategoryfromIdinDatabase(id)
            setCategoryfromIdinDatabase(id, new_category)
        
        //fonctions sur la date d'inscription
            getSignUpDate()
        
        //fonctions sur la newsletter
            getNewsletter()
            getNewsletterfromIdinDatabase(id)
            setNewsletterfromIdinDatabase($id)
            
        //fonctions sur la dernière modification du profil
            getLastupdate()
            getLastupdatefromIdinDatabase(id)
            setLastupdatefromIdinDatabase
            
        //fonctions sur la dernière visite
            getLastvisit()
            getLastvisitfromIdinDatabase(id)
            setLastvisitfromIdinDatabase

III.- Les différents éléments pour la création du style :
