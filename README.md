# Flask-compose-example

This repository is an example showing how to use ansible to setup flask application using apache and docker compose.

Getting Started
---------------

### Prerequisite

- **Ansible 2.9+**
- **sshpass**

Update the inventory file with correct server ip and its password
To get started testing with this repository,

#### Setting up the server

Run the fallowing server to setup the remote server

``ansible-playbook -i ./inventory play-book.yml``

#### How the script works

- This script install the required software dependencies to the remote server using ansible playbook provided.
- It will pull the lates changes from the pointed git repo and recreate the docker containers with the latest changes. 
- This script can be run multiple and it will only do the required changes.
