VPS new
    install Htop , Pydf
    install tmux
    install zsh
    install autosuggestion
    install postgresql and mysql
    install RoR -> RVM -> NVM

    install reddis and elastic search

    install nginx apache

    step1
      provisioning
        role
          htop
            defaults
            files     /* file cc them cho ansible chay vidu file co ssh key/*
            handlers  /* trong truong hop minh install apache ok khong sao, co error se co 1 callback  */
            meta    /* chua hieu */
            readme.md
            tasks   /* chua file thuc hien cai lenh */
            templates   /* hoc khi xai jinja2
            tests     /* thu muc test cho thu muc chua no */
            vars   /* chua cai bien de truyen vao khi xai */
        playbook.yml
      Vagrantfile
      readme.md

      ansible-doc -l| grep apt (cac command apt)
        ansible-doc apt       (huong dan cach xai)

        ansible-galaxy --help  // show command
      ansible-galaxy command <name package>  (tim kiem thong tin truc tuyen tren mang)
          install : install thong tin co dc tu search o tren cloud chi tai ve may thoi
          import: de dung khi da tai ve install
          search  : tim kiem thong tin

/provisioning/roles
mkdir -p {base,htop,pydf,tmux,zsh}/{task,README.MD}
touch base/task/main.yml
touch htop/task/main.yml
touch pydf/task/main.yml
touch tmux/task/main.yml
touch zsh/task/main.yml


vagrant ssh -> zsh -> .zshrc  -> bash -> rm -rf .zshcr

 ve xem lai config file zshrc how to install
chinh lai file .zshrc



name: ensure apt cache is up to date
    apt: update_cache=yes
  - name: ensure packages are installed
    apt: name={{item}}
    with_items:
        - postgresql
        - libpq-dev
        - python-psycopg2

        https://github.com/ansible/ansible-examples/blob/master/language_features/postgresql.yml


    mysql:

    name: Install MySQL
  apt:
    name: "{{ item }}"
  with_items:
    - python-mysqldb
    - mysql-server

    https://github.com/Friz-zy/ansible-mysql-5.7-relication-failover-ubuntu-16.04/blob/master/roles/mysql/tasks/main.yml



//install about con` lai
    https://github.com/aleks/ansible-rails/tree/master/roles


scp <source> <destination>
// copy file trong vsp ra may chu
scp vagrant@192.168.60.4:/home/vagrant/.oh-my-zsh/custom/plugins/zsh-autosuggestions/zsh-autosuggestions.zsh zsh-autosuggestions.zsh


// copy file trong  may chu ra vsp
scp zsh-autosuggestions.zsh vagrant@192.168.60.4:/home/vagrant/.oh-my-zsh/custom/plugins/zsh-autosuggestions/zsh-autosuggestions.zsh
scp index.php vagrant@192.168.60.4:/home/vagrant/www/book.example.com/index.php


 git reset --hard origin/master   //lay code tren repos ghi chep de len code hien tai

git commit --all --amend --no-edit    //khong tao ra 2 commit + theo nhung thay doi moi nhat
 -> git push -u -f origin master

echo "<?php echo date('H:i:s');?> " | sudo tee /var/www/book.example.com/index.php

// note 7/8/2018
step1: create database and user use for wordpress
----------------
- name: Create WordPress MySQL database
  mysql_db:
    name: wordpress
    state: present

- name: Create User Wordpress
  mysql_user: name=wordpress host=localhost password={{ wordpress_pass }} priv=wordpress.*:ALL
------------------

step2: vao trang browser , go dia chi ip, config tren trang web wordpress
-> sau do web chi ra :not have permission to write wp-config.php itself
-> copy noi dung file wp-config.php tren browser vao file wp-config.php trong folder templates.
--------------
step3: run command copy file to virtual host

- name: Create wp-config
  template:
    src: wp-config.php
    dest: /var/www/book.example.com/wp-config.php

--------------
step4: completed install env wordpress in your browser


-------task 2: learning encrypt and decrypt password
playbook.yml: add command to run vagrant provision (if not add command , will notify fault)
--
    config.vm.provision :ansible do |ans|
    ans.playbook = 'provisioning/playbook.yml'
    ans.ask_vault_pass = true
  end
end
--
------file need to encrypt :
ansible-vault encrypt provisioning/roles/mysql/vars/main.yml
-> enter password ( example: abc)
ansible-vault encrypt provisioning/roles/wordpress/vars/main.yml
-> enter password ( example: abc)
note: only use one password when use vagrant provision
-----file need to decrypt
ansible-vault decrypt provisioning/roles/mysql/vars/main.yml
ansible-vault decrypt provisioning/roles/wordpress/vars/main.yml
-> enter password (use for encrypt : abc)
------end-------


task today 9/8
--------------------
Install nodejs -> package quan ly la nvm