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

```ansible-playbook -i ./inventory play-book.yml```

