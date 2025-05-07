# Secretary Stock

Just a little app to manage items physicaly stored in a secretariat and volunteer that can borrow them for some events

## TODO for v1

- I18N
- Simple log in session without role or user
- Change an item (for the base amount for exemple)
- Make a command of item
- Show what are currently in the stock
- Manage the command

## TODO for more

- Log in with user and role to better manage
- A user can make himself a command and send email
- Link the user to another external DB

## Stack

Symfony (and Bootstrap)

## Some usefull command

"php bin/console make:entity" create or update an entity

"php bin/console make:migration" prepar the migration to adapt the db to the change

"php bin/console doctrine:migrations:migrate" apply the change to the db

"php bin/console doctrine:fixtures:load" to load data in the db to test

"symfony server:start" launch the server

