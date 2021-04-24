Role Name
=========

This role tries to do the following:

- Install latest version of Docker in package manager.
- Open endpoints of Docker allowing Portainer connection.
- Install latest version of docker-compose.

Role Variables
--------------

The following variables need to be provided:
-  docker\_compose\_version: version wished to be installed.
- docker\_compose\_dir: path to docker-compose installation.
- docker\_compose\_checksum: hashed checksum of the downloaded file.

Example Playbook
----------------

Including an example of how to use your role (for instance, with variables passed in as parameters) is always nice for users too:

    - hosts: servers
      roles:
         - docker 

License
-------

BSD

Warning
------------------

This roles is used only for learning porpouses. It's not recommended without an understanding of how it does what it does.
