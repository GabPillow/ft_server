# ft_server

42's project in new cursus.

### Prerequisites

You can run docker in different ways the simple one is to simply install docker.
For school's mac you need to :
-install docker from managed software center
-get the init docker script from here : https://github.com/alexandregv/42toolbox
-run the script to install docker properly

### Dockerfile

First line in need to know the parent image here we want debian buster:
      
      FROM debian:buster
      
Second line used to run command in container before running this one, here we can use to install what we will need.
      
      RUN [command]
      
Copy line used to copy the file we need in the container, here our /srcs.

      COPY [directory]

Last one, command run our configurqtion script.

      ENTRYPOINT [sh, script.sh]

### Commands

Kind like make for makefile this one will build image :

      docker build -t [image's name] .

To run container, the -p option is necessary to publish a container’s port(s) to the host :

      docker run -p [your port]:[port container] [image]

### Tips
1.When running docker without being in the container, this one will automatically stop
if nothing is running in front.
Nginx will run in back.

2.When first installing nginx and php, you will maybe have a problem, nginx will be running but only apache page will be visible. You'll need to install one package, or the php version suggested in the php source.

### Sources

42toolbox :

https://github.com/alexandregv/42toolbox/blob/master/README.md

A good guide to made by another student :

https://github.com/pmouhali/ft_server/blob/master/README.md

Php :

https://electrictoolbox.com/debian-install-php-without-apache/

ssl :

https://devcenter.heroku.com/articles/ssl-certificate-self

Docker :
dockerfile:
https://docs.docker.com/engine/reference/builder/
commands:
https://docs.docker.com/engine/reference/commandline/run/
https://docs.docker.com/engine/reference/commandline/build/
https://docs.docker.com/engine/reference/commandline/exec/
