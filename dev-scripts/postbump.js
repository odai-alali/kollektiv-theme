'use strict'
const fs = require('fs')
const css = fs.readFileSync('style.css', 'utf-8')
const packageFile = require('../package')
const newVersion = packageFile.version
const newCss = css.replace(/Version:\s\d\.\d\.\d/gm, 'Version: v' + newVersion);

fs.writeFileSync('style.css', newCss, 'utf-8');
