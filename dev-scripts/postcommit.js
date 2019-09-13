'use strict'
const execSync = require('child_process').execSync

execSync(`git commit style.css --amend --no-edit`)
