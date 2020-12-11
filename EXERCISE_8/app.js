const express = require('express');
const app = express();
const routes = require('./routes/router');


app.set('view engine', 'ejs');
app.use('/', routes);
app.get('/', (req, res) => {
    res.render('registration');
})

app.listen(3800, console.log("Listening to port 3800"));