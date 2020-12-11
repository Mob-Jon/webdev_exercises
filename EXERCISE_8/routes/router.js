const controller = require('../controller/controller');
const express = require('express');
const router = express.Router()


router.get('/login' , controller.register);
router.post('/home', controller.login);

module.exports = router;