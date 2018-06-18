//grunt.js

module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		path : {
			material : "node_modules/@material",
			dev : "_DEV",
			stage : "_STAGE",
			prod : "_PROD"
		},
		watch: {
			sass: {
				files: ['<%= path.dev %>/scss/**/*.{scss,sass}','<%= path.dev %>/scss/_partials/**/*.{scss,sass}'],
				tasks: ['sass:dev']
			},
			livereload: {
				files: ['*.html', '*.php', 'js/**/*.{js,json}', 'css/*.css','img/**/*.{png,jpg,jpeg,gif,webp,svg}'],
				options: {
					livereload: true
				}
			}
		},
		sass: {
//These options need to be configured correctly: https://github.com/sass/node-sass#options
// 			options: {
// 				sourceMap: true,
// 				outputStyle: 'compressed'
// 			},
			material: {
				sourceMap: true,
				files: [{
		             // Set to true for recursive search
		             expand: true,
		             cwd: '<%= path.material %>/',
		             src: ['**/*.scss'],
		             dest: '<%= path.dev %>/css/materialize/',
		             ext: '.css'
				}]
			},
			dev: {
				sourceMap: true,
				files: [{
		             //Recursively process all files in scss folder.
		             expand: true,
		             cwd: '<%= path.dev %>/scss/',
		             src: ['**/*.scss', '!ignore/*.scss'], //ignore is a placeholder
		             dest: '<%= path.dev %>/css/',
		             ext: '.css'
				}]
			}
		}
	});

// 	grunt.registerTask('default', ['sass:dist', 'watch']);
	grunt.loadNpmTasks('grunt-contrib-sassjs');
	grunt.loadNpmTasks('grunt-contrib-watch');

	//I want to move fonts/ and icons/ into the css folder

	grunt.registerTask('dev', ['sass:dev', 'watch']);




};