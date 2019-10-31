#Online-Test

1. git clone git@github.com:adeputraprimasuhendri/online-test.git
2. cd online-test
3. docker run --rm -v $(pwd):/app composer install
4. sudo chown -R $USER:$USER ~/online-test
5. Setup Database Connection .env 
6. docker-compose up -d

Preview :: http://157.245.144.81/
