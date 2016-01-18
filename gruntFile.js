'use strict';

module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		project: {
   			app: ['app'],
    			assets: ['<%= project.app %>/assets'],
    			css: ['<%= project.assets %>/sass/style.scss']
		},
		sass: {
  			dev: {
        			options: {
            				loadPath:'.',
                                        style: 'compressed',
            				compass: false
        			},
                    files: {
                            '<%= project.assets %>/dist/css/style.css':'<%= project.css %>'
                    }
    			}
		},
        uglify: {
            dev: {
                files: {
                    '<%= project.assets %>/dist/js/script.min.js': '<%= project.assets %>/js/script.js'
                }
            }
        },
		watch: {
    			sass: {
        			files: '<%= project.assets %>/sass/{,*/}*.{scss,sass}',
        			tasks: ['sass:dev']
    			},
                uglify: {
                    files: '<%= project.assets %>/js/{,*/}*.js',
                    tasks: ['uglify:dev']
                }
		},
		bower: {
            dev: {
                base: 'bower_components',
                dest: '<%= project.assets %>/bower_components',
                options: {
                    checkExistence: true,
                    debugging: true,
                    paths: {
                        bowerDirectory: 'bower_components',
                        bowerrc: '.bowerrc',
                        bowerJson: 'bower.json'
                    }
                }
            }
        }
	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('main-bower-files');
	grunt.registerTask('default', [

	]);
};
