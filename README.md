# Laravel Database simple example 

## Aim

This Laravel example is a simpleapplication with a simple database example. The database schema contains one table (a person, with a first name, a last name and city). In a first stage, different routes will be created manually. On a later stage, a resource route will be used.

This example does  not respect recommandations and isnot based on the HTTP methods. The aim is to manipulate a database using Laravel. These issues will be delt with in another project.

## What have been done ?

### Creating the database

Under MySQL, a database must be created. In this example, the name "MyFirstDB" will be used.

To configure Laravel, the .env in the root folder must be edited with the adequate parameters (MySQL host, MySQL port, MySQL user and his password, and the Database name).

### IHMs

The system has four interfaces (pages or views)

#### Index

Display a table with all 'persons', each row contains also three buttons for the two operations :

- Update : to update a person,
- Delete : to remove a person.

The page contains a button to add a new 'person'.

#### Add new person

To add a new person. The page displays an empty form.

#### Update person

To update a person's row. The page display a filled form.

#### Deletion confirmation

Display a confirmation form to confirm the delete of the row. Laravel allows 'soft delete', however, we will apply a 'physical' delete in this example.

### Conrollers 

The example contains two types of controllers :

- Controllers that prepare data : these controllers redirect to desired pages. If the target page needs data, the controllers execute the necessaty queries and prepare them. We cite :
-- addnew controller
-- update controller
-- delete controller
- Controllers that apply actions : these controllers receive data (form inputs) and execute the adequate action. We have :
-- savenew controller
-- saveupdate controller
-- confirmdelete controller

### Model

One model class is created with a migration to create the table. No seeder is needed.

The model Person contains :

- id : autoincrements and premary key,
- first_name : string,
- last_name : string,
- city : string

To create this model, the following command is used :

`php artisan make:model Person`

The adequate migration is created using the command :

`php artisan make:migration create_persons_table --create=persons`

`php artisan migrate`

**Update**

The creation command must be (see 'Additional notes'):

`php artisan make:migration create_people_table --create=people`

## Additional notes

It seems that Laravel is so cever that it tries to look for 'people' as a table name (plural of person). 

