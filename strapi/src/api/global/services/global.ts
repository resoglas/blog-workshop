'use strict';

/**
 * global service.
 */

const { createCoreService } = require('@strapi/strapi').factories;

export default createCoreService('api::global.global');
