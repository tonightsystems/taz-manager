module.exports = function(grunt) {
    "use strict";

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            dist: {
                files: {
                    'public/css/style.css' : 'public/scss/style.scss'
                }
            },
            options: {
                style : 'compressed'
            }
        },
        watch: {
            css: {
                files: '**/*.scss',
                tasks: ['sass'],
                options: {
                    livereload: true
                }
            }
        },
        jshint: {
            options: {
                jshintrc: true
            }
        },
        uglify: {
            dist: {
                src: ['js/**/*.js'],
                dest: 'js/build/<%= pkg.name %>.js'
            },
            options: {
                banner : [
                    '/*!',
                    '<%= pkg.name %>',
                    '-',
                    '<%= pkg.version %>',
                    '-',
                    '<%= grunt.template.today("dd-mm-yyyy") %>',
                    '*/\n'
                ].join(' '),
                report : 'gzip'
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default', ['watch']);
}
