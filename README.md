git clone https://github.com/Sangoule/det-uad-laravel.git
copie coller .env.example vers un fichier .env
composer install
npm install 
php artisan key:generate
php artisan serve

git checkout -b modifnavbar
git add .
git commit -m "Modification nangam sangam"
git push --set-upstream origin modifnavbar
pr modifnavbar vers main
