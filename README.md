# ft_server

42's project in new cursus.

### Prerequisites

You can run docker in different ways the simple one is to simply install docker.
For school's mac you need to :
-install docker from managed software center
-get the init docker script from here : https://github.com/alexandregv/42toolbox
-run the script to install docker properly

### Commands

Kind like make for makefile this one will build image :
  
  docker build -t [image's name]

To run image, the -p option is necessary to publish a container’s port(s) to the host :
  
  docker run -p [your port]:[port container] [image]
### Tips
When running docker without being in the container of your machine virtual, this one will automatically stop
if nothing is running in front.
Nginx will run in back.
