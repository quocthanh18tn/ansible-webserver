VPS new
    install Htop , Pydf
    install tmux
    install zsh
    install autosuggestion
    install postgresql and mysql
    install RoR -> RVM -> NVM
    install redit and elisticsearch
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