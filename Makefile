.PHONY=attach build dev install
SHELL=/bin/bash

PORT ?= 8080
RSYNC_OPTIONS ?= --dry-run

attach:
	docker-compose run web /bin/bash

build: clean
	docker-compose build

clean:
	docker-compose stop web
	docker-compose rm -f web

data-new-uniq:
	uniq src/public/database-new.txt | sponge src/public/database-new.txt

data-new-check: data-new-uniq
	cat src/public/database-new.txt

data-new-edit: data-new-uniq
	editor src/public/database-new.txt

data-new-purge:
	rm src/public/database-new.txt
	touch src/public/database-new.txt
	chmod 777 src/public/database-new.txt

data-new-validate: data-new-check
	cat src/public/database-new.txt >> src/public/database-verified.txt 
	$(MAKE) data-verified-uniq
	$(MAKE) data-new-purge

data-verified-uniq:
	uniq src/public/database-verified.txt | sponge src/public/database-verified.txt

deploy:
	rsync $(RSYNC_OPTIONS) -avz --exclude /src/public/database* ./ -e 'ssh' partouze-cagoule@ftp.pastis-hosting.net:signesexe.partouze-cagoule.fr/ 

dev: build 
	docker-compose up

install:
	cd src && composer install
	$(MAKE) permissions

permissions:
	chmod 777 src/public/database*.txt