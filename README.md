# Inhibitor

## An error handler for a CodeIgniter Application

## What it does

Inhibitor catches any parse, fatal errors or exceptions of your application and handles them properly.

By "properly" means:

 - formats the error message
 - logs the error
 - mails the error
 - redirects to a "placatory" view

## Installation

Note that you can download Inhibitor with CodeIgniter 2.1.2 and with an example page.

Now, if you want to use Inhibitor to your application,
copy the following files to your app:

    controllers/
        inhibitor_handler.php   <!-- controller that logs, mails and redirects-->
    hooks/
        inhibitor_hook.php      <!-- the hook class that catches the errors and formats the message-->
    views/
        inhibitor.php           <!-- a custom view - here you can use yours-->

Edit your config file to activate hooks and enable logging:

    $config['enable_hooks'] = TRUE;
    $config['log_threshold'] = 1;

Edit lines 67, 68 and 69 of inhibitor_handler.php to setup the email.

## Requirements

Inhibitor is tested with CodeIgniter 2.1.2

## Demo

[Download][1] the latest version that comes with CodeIgniter 2.1.2 and an example page that tests three PHP error levels.

  [1]: https://bitbucket.org/vdw/inhibitor/get/bba9455842dc.zip

## Copyright and license

Copyright (©) 2012 Dimitris Krestos. See LICENSE for details.