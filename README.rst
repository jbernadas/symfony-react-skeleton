This is a simple Symfony 4 microservice backend with React frontend skeleton you can use to start a project.

You need to have Composer, Node.js, npm and yarn installed to begin.

When you have Composer, Node.js, npm and yarn installed, you simply clone this project by::

    git clone git@gitlab.com:jbernadas/symfony-react-skeleton.git <name-of-project>

After cloning cd into the newly created project folder::

    cd <name-of-project>

Now issue the following commands::

    composer install
    yarn install
    yarn encore dev

You can now see the fruits of your labor by issuing command::

    php bin/console server:run

then go to the URL stated in the command line output.

That's it.
