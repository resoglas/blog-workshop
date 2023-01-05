'use strict';

/**
 * global router.
 */

const { createCoreRouter } = require('@strapi/strapi').factories;

export default createCoreRouter('api::global.global');
