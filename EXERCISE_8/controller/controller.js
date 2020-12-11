// const { render } = require("ejs")

exports.register = async (req, res) => {
    try {
        res.render('login');
    } catch (error) {
        console.log(error);
    }
}
exports.login = async (req, res) => {
    try {
        res.render('home');
    } catch (error) {
        console.log(error);
    }
}