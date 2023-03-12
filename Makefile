.PHONY: install
install: ## install project
	cp -u -p .env .env.local
	symfony composer install
	symfony console doctrine:mongodb:schema:drop
	symfony console doctrine:mongodb:schema:create
	symfony console doctrine:mongodb:fixtures:load -n


.PHONY: reset-db
reset-db: ## reset database
	symfony console doctrine:mongodb:schema:drop
	symfony console doctrine:mongodb:schema:create
	symfony console doctrine:mongodb:fixtures:load -n
