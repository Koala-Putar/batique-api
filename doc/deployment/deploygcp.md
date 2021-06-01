# Deploy on Google Cloud Platform
Google Cloud Platform lets you build, deploy, and scale applications, websites, and services on the same infrastructure as Google.  

## Table of Contents
- [Table of Contents](#table-of-contents)
- [Step by step](#step-by-step)
- [Links for References](#links-for-references)
    - [Official](#official)
    - [Alternative](#alternative)

## Step by step
1. Create bucket in cloud storage.
2. Save the batik images in there with public access
3. Create a cloud sql instance and import sql.
4. Change images value with image url from cloud storage.
5. Open cloud build and connect your github repository project.
6. Create a service in cloud run and connect the service with your cloud sql instance and cloud build.
7. Configure your first service's revision with previous github repository in cloud build.
8. Connect your cloud run service with your sql instance.

## Links for references
### Official
- [Build and deploy a PHP service](https://cloud.google.com/run/docs/quickstarts/build-and-deploy/php)
- [Connecting from Cloud Run to Cloud SQL](https://cloud.google.com/sql/docs/mysql/connect-run)
- [Run Laravel on Google App Engine standard environment](https://cloud.google.com/community/tutorials/run-laravel-on-appengine-standard)
### Alternative
- [Auto-deploying laravel app on Google Cloud Run](https://sandymadaan.wordpress.com/2019/12/27/auto-deploying-laravel-app-on-google-cloud-run/)
- [Connect your postgres instance on laravel app in GCP](https://medium.com/@sandymadaan/connect-postgres-instance-on-laravel-app-in-gcp-6e7f243a805)