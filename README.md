#R-pi 
This project provides the basis for running a remote R server using the raspberry Pi. 

The current process using a REST-based API to enable statistical operations by webapps and other mobile applications which cannot (or don't want to) communicate with R locally.

Communication with the server (once vetted and secured, of course), allows curl-based communication between your current pages/server and the R-server.

### Version
1.0.0.0 alpha

### Changelog
 * 1.0.0.00 - initial push

### Referenced Works (F/OSS software)
R-pi uses a number of open source projects to work properly:
* rserve-php - GPLv2 Licensed (og LGPLv2.1). Copyright (C) 2010 Clément Turbelin, Simon Urbanek. [Github](https://github.com/cturbelin/rserve-php)
 
### Installation
You will need the Rserve service running on a local R instance as well as a linux distribution.  Linux is strongly encouraged, as other platforms may not have access to fork().

### Development
Want to contribute? Great! Emails or PM's are welcome.

### Todos
 - REST API 
 - Guide for securing Pi 3
 - CSRF protection
 - CORS setup
 - Tunneling (optional)

### License
----
R-pi - Copyright 2016, Shawn P. Gilroy. GPL-Version 2
