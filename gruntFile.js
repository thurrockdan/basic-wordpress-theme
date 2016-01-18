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
        'ftp-deploy': {
            build: {
                auth: {
                    host: 'server.com',
                    port: 21,
                    authKey: 'key1'
                },
                src: 'path/to/source/folder',
                dest: '/path/to/destination/folder',
                exclusions: ['path/to/source/folder/**/.DS_Store', 'path/to/source/folder/**/Thumbs.db', 'path/to/dist/tmp']
            }
        }

	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-ftp-deploy');
	grunt.registerTask('default', [

	]);
};
