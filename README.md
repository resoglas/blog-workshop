# Blog Workshop

## Installation

```sh
cp strapi/.env.example strapi/.env
./start
```

## Usage

**Note**: *it takes some time for initial startup of the applications.*

- Wordpress: [http://localhost:8132/admin](http://localhost:8132/admin)
  - Username: `wordpress`
  - Password: `wordpress`
  - ```sh
    docker-compose exec wordpress bash
    ```
- Strapi: [http://localhost:8133](http://localhost:8133)
  - ```sh
    docker-compose exec strapi bash
    ```
- Next.js: [http://localhost:8134](http://localhost:8134)
  - ```sh
    docker-compose exec nextjs bash
    ```
- Gatsby: [http://localhost:8135](http://localhost:8135)
  - ```sh
    docker-compose exec gatsby bash
    ```
- phpMyAdmin: [http://localhost:8080](http://localhost:8080)
  - For other clients:
    - Host: `localhost`
    - Port: `33306`
    - Username: `root`
    - Password: `cms_workshop`
