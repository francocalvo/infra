Role Name
=========

This role tries to install a media automation stack. It includes:
- Radarr.
- Sonarr.
- Bazarr.
- Prowlarr.
- Unmanic.
- Ombi.

They get installed in subfolders from a shared docker-compose.

Requirements
------------

You need to have installed Docker and docker-compose. Ideally, your media folders are in a samba share.

Role Variables
--------------

For radarr:
- radarr_uid.
- radarr_gid.
- radarr_port.

For sonarr:
- sonarr_uid.
- sonarr_gid.
- sonarr_port.

For bazarr:
- bazarr_uid.
- bazarr_gid.
- bazarr_port.

For prowlarr:
- prowlarr_uid.
- prowlarr_gid.
- prowlarr_port.

For ombi:
- ombi_uid.
- ombi_gid.
- ombi_port.

For unmanic:
- unmanic_uid.
- unmanic_gid.
- unmanic_port_movies.
- unmanic_port_series.

