+ [官网文档](https://docs.docker.com/docker-for-windows/install-windows-home/)
+ [博客](https://www.cntofu.com/book/139/image/dockerfile/healthcheck.md)


https://blog.csdn.net/longgeaisisi/article/details/90477975


docker run -itd --name me-mysql -p 3311:3306 -e MYSQL_ROOT_PASSWORD=123456 mysql

docker run --name me-nginx -p 9090:80 -d -v C:/wamp/www:/usr/share/nginx/html -v C:/wamp/bin/docker/conf.d:/etc/nginx/conf.d --link me-php:php nginx


set ff=unix
队列先安装后listen