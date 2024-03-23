git clone https://github.com/Sangoule/det-uad-laravel.git
copie coller .env.example vers un fichier .env
composer install
npm install 
php artisan key:generate
php artisan serve

git checkout -b nombranche  #Création de branche de travail 
git add . #Ajout des modification
git commit -m "Modification nangam sangam" #Commit des changements
git push --set-upstream origin modifnavbar # Publication des changements dans le depots distants
pull request modifnavbar vers main #Faire un  PR pour deployer les changements
