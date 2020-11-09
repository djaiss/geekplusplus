The site is hosted on Linode and monitored by Forge.

To connect through SSH: `ssh forge@45.79.48.56`

To deploy, ssh into the machine and run `git pull origin main`, then `php artisan responsecache:clear`.