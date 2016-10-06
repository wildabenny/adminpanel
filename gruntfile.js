module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        less: {
            production: {
                options: {
                    paths: ['css']
                },
                files: {
                    'css/style.css': 'css/style.less'
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.registerTask('default', 'less');
};
