# Les Superglobales PHP

## Qu'est-ce qu'une superglobale ?

Une superglobale est une variable PHP spéciale qui présente des caractéristiques uniques :

### **Caractéristiques fondamentales**

- **Accessible partout** : Disponible dans toutes les fonctions, classes et fichiers sans déclaration `global`
- **Pré-remplie automatiquement** : PHP les initialise automatiquement avec des données du système, du serveur ou de l'utilisateur
- **Toujours un tableau associatif** : Structure `$_GLOBALE['cle'] => 'valeur'`
- **Lecture seule pour certaines** : `$_SERVER`, `$_GET`, `$_POST` ne peuvent pas être redéfinies globalement
- **Persistence variable** : Selon le type, les données persistent différemment (requête, session, navigateur)

### **Rôle dans l'écosystème web**

Les superglobales sont le **pont de communication** entre :

- Le **navigateur** et le **serveur** (`$_GET`, `$_POST`, `$_COOKIE`)
- Les **différentes pages** d'un site (`$_SESSION`)
- L'**application** et son **environnement** (`$_SERVER`, `$_FILES`)

Elles permettent à PHP de récupérer et traiter les informations essentielles pour créer des sites web **interactifs** et **dynamiques**.

### **Pourquoi "super" ?**

Contrairement aux variables normales qui ont une **portée limitée** (locale, globale), les superglobales ont une **portée universelle** dans tout le script PHP, d'où leur nom "superglobales".

## Principales superglobales vues dans les exercices

### **$\_GET**

- **Usage** : Paramètres envoyés dans l'URL
- **Exemple** : `page.php?nom=Pedri&age=22`
- **Récupération** : `$_GET['nom']` → "Pedri"
- **Cas d'usage** : Liens avec paramètres, formulaires `method="get"`

### **$\_POST**

- **Usage** : Données envoyées via formulaire POST
- **Sécurité** : Plus sûr que GET (données non visibles dans l'URL)
- **Récupération** : `$_POST['email']`
- **Cas d'usage** : Formulaires de connexion, inscription

### **$\_SERVER**

- **Usage** : Informations sur le serveur et la requête
- **Variables utiles** :
  - `$_SERVER['REQUEST_METHOD']` → GET, POST, etc.
  - `$_SERVER['PHP_SELF']` → Nom du script actuel
  - `$_SERVER['REMOTE_ADDR']` → Adresse IP du visiteur

### **$\_SESSION**

- **Usage** : Stockage persistant côté serveur pour un utilisateur
- **Durée** : Jusqu'à fermeture du navigateur
- **Obligatoire** : `session_start()` en début de script
- **Cas d'usage** : Système de connexion, panier e-commerce

### **$\_COOKIE**

- **Usage** : Stockage côté navigateur
- **Durée** : Selon l'expiration définie
- **Création** : `setcookie("nom", "valeur", time() + durée)`
- **Cas d'usage** : Mémoriser la dernière visite, préférences

## Règles de sécurité importantes **Toujours valider et sécuriser**

- `htmlspecialchars()` pour l'affichage (anti-XSS)
- `trim()` pour nettoyer les espaces
- `filter_var()` pour valider les emails
- `isset()` et `!empty()` pour vérifier l'existence
