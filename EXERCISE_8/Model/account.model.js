const Sequelize = require('sequelize');
const sequelizeInstance = require('../Utility/dbConnectionSql');

const account = sequelizeInstance.sequelize.define('login_Account', {
    id: {
        allowNull: false,
        autoIncrement: true,
        primaryKey: true,
        type: Sequelize.INTEGER
    },
    email: {
        allowNull: false,
        type: Sequelize.STRING,
        validate: {
            isEmail: true,
            notNull: true,
            notEmpty: true,
            max: 30,
            min: 20
        }
    },
    password: {
        allowNull: false,
        type: Sequelize.STRING
    },
},
    {
            createdAt:true,
            updatedAt:true,
            deletedAt:true
    }

)
module.exports = account;
