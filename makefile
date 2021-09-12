build:
	sudo docker build -t php_advanced .

run:
	sudo docker run -d --rm -p 8080:8080 --name php_advanced php_advanced

stop: 
	sudo docker stop php_advanced

dev:
	sudo docker run -d -v "/home/colorkat/Документы/programming/php-advanced:/php_advanced" --rm -p 8080:8080 --name php_advanced php_advanced

rmc:
	sudo docker container prune