module.exports = (function () {

    /**
     * Require all of the scripts in the modules directory
     */
    return require('bulk-require')(__dirname, ['modules/**/*.js']).modules;

})();