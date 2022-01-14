# Mighty Mind PHP/SilverStripe/GraphQL Challenge 

This repo is the output of my work when doing the challenge. 

For more information ablut the challenge, please refer to the [Original ReadMe](Original.md) of the challenge.

## Things to note when installing

Due to compatibility issues, using 
```
composer install
```
As stated on the directions on the original Read Me might not work.

Instead you have to ignore platform requirements due to the PHP version used on the docker container is already 8. 
```
composer install --ignore-platform-reqs
```
or
```
composer install -W
```
Silverstripe seemed to require php unit with a version which is no longer supported on PHP 8. 

Also, for easier development and partial data testing the following were added:

1. [Link SilverStripe Asset Admin Module](https://github.com/silverstripe/silverstripe-asset-admin)
2. [Link Dev tools for silverstripe-graphql](https://github.com/silverstripe/silverstripe-graphql-devtools)


## In Progress

Everything as I understood had already been created, the integration of GraphQL Queries and the retrieval of data from the the data source or database, Except for the following roadblocks.

1. Report Data Objects seems to have problems on loading content both on the GraphQL playground and on the Admin Page.
For some reason, the admin page listing is only showing ID's of data rows. Probabably need to read more on the Silver Stripe Documentation regarding on creating Admin pages with regards to data population.

2. Working on reserve classes sucas as "classname" which already exists on the tables pregenerated when flushing data. Refer to the Infobar Schema.

3. Creating Mutation on Nested Schema. The challenge of Creating New Class Query took me some time as I couldn't see much documentation of SilverStrip GraphQL. Which result to not being able to create it. I can figure how to create a mutation directly on the type but is having a hard time with the nested ones. 

## Future Study

Aside from the road blocks, I have a few things in mind I'd like to do more which might not be required from the challenge but I beleive would help me improve.

1. Automation of class creation. Find a way to implement an automation module on development. Somewhat like Bake on CakePHP and Artisan on Laravel. 

2. Multiple Data Object on one DB table. Example is the dropdowns. It is consist of year and school subscriptions which of a dropdown type. Since they use the same fields, why not reuse the same table? Not sure of the implications but I think it is worth a try.

3. Study how to work on the Admin Display. currently, the rows only shows ID's on the custom created Admin pages. Id like to figure how to control, add, and limit the columns to be shown on the Admin listing pages.

