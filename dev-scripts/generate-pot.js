'use strict'
const wpPot = require('wp-pot')
const path = require('path')
wpPot({
    destFile: path.resolve(__dirname + '/../languages/kollektiv.pot'),
    domain: 'kollektiv'
})
