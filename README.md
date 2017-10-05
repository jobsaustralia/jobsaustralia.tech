# JobsAustralia.tech Job Seekers

Job matchmaking for job seekers in the Australian IT sector - written in Laravel 5.5 (or [5.4](https://github.com/jobsaustralia/jobsaustralia.tech/tree/master)).

## Contributors

* Aaron Horler
* Ozlem Kirmizi
* Kim Luu
* Dennis Mihalache
* Melissa Nguyen

## Setup instructions

Setup your development environment following [the official requirements](https://laravel.com/docs/5.5/installation).

Our Linux deployment script is [here](https://github.com/jobsaustralia/scripts-conf-and-docs/blob/master/scripts/deploy.sh#L1). This script assumes you've setup the project before.

**Clone the repository**

`git clone -b laravel-5.5 https://github.com/jobsaustralia/jobsaustralia.tech.git`

`cd jobsaustralia.tech`

**[Configure](https://laravel.com/docs/5.5/configuration#environment-configuration) your environment**

`mv env.example .env`

**Configure [mail](https://laravel.com/docs/5.5/mail)**

The project requires an outgoing mail driver for basic functionality.

**Install**

`composer install`

**Migrate, and (optionally) seed**

`php artisan migrate --seed`

**Setup [employ.jobsaustralia.tech](https://github.com/jobsaustralia/employ.jobsaustralia.tech/tree/laravel-5.5)**

Follow the setup instructions for the employer site. 

**Create a symbolic link for resumes**

`ln -s jobsaustralia.tech/storage/app/public/ employ.jobsaustralia.tech/storage/app/public/`
