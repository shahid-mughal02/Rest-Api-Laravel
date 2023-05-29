<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

We are doing about Laravel Rest Api's with Vue.js

After Installing Add the skill table
Add the Skill Controller 
Then Go to the api.php not the web.php because we are going to work with apis

Ctreate Custom Request for skills
php artisan make:request StoreSkillRequest

// StoreSkillRequest
then make authroize to true
then validate in rules

Use Postman to get data using post request using this url
http://127.0.0.1:8000/api/v1/skills

Use Postman to create data in DB using post request using this url
http://127.0.0.1:8000/api/v1/skills
with the following headers:
Accept -> application/json
Content-Type -> application/json

On requesting below url its returning all the DB table column
http://127.0.0.1:8000/api/v1/skills/2

To avoid this we'll create a resource
php artisan make:resource V1/SkillResource
Then go this resource and add specified column in array

For Index Function Create new Resource -> SkillCollection
php artisan make:resource V1/SkillCollection
