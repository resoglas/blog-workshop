# Blog Workshop

## Resources

- [Gatsby + Strapi](https://strapi.io/blog/build-a-static-blog-with-gatsby-and-strapi)
  - [Plugin](https://github.com/gatsby-uc/plugins/tree/main/packages/gatsby-source-strapi)
- [Gatsby + Wordpress](https://www.gatsbyjs.com/guides/wordpress)
  - [Plugin](https://github.com/gatsbyjs/gatsby/tree/master/packages/gatsby-source-wordpress)
- [Next.js + Strapi](https://strapi.io/blog/build-a-blog-with-next-react-js-strapi)
- [Next.js + Wordpress](https://github.com/colbyfayock/next-wordpress-starter)

Headless Wordpress setups require [WPGraphQL](https://www.wpgraphql.com) plugin for both Next.js and Gatsby.

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
    
To make a call to an API from within the frontend applications use:
- `http://wordpress:8080`
- `http://strapi:1337`

## Additional resources
- [Gatsby S3 / CloudFront](https://www.gatsbyjs.com/docs/how-to/previews-deploys-hosting/deploying-to-s3-cloudfront)
- [Gatsby Cloud](https://www.gatsbyjs.com/dashboard/signup) Supports advanced features like SSR, DSG, Image CDN and more.
- [Wordpress Hosting](https://www.cloudways.com/en/wordpress-hosting.php)
