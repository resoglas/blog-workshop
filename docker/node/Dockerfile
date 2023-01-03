FROM node:lts

WORKDIR /usr/src/app

RUN npm install -g npm@latest; \
    yarn set version berry; \
    corepack enable; \
    corepack prepare yarn@stable --activate; \
    yarn config set --home enableTelemetry 0

USER node
