module.exports = function(grunt){
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
	    sass: {
	      dist: {
	        options: {
	          style: 'expanded'
	        },
	        files: [{
			    expand: true,
			    cwd: 'scss',
			    src: ['**/*.scss'],
			    dest: 'css',
			    ext: '.css'
			}]
	      },
	    },
	    copy: {
		  main: {
		    src: ['scss/fonts/*','!scss/fonts/*.scss'],
		    dest: 'css/fonts/',
		    flatten: true,
		    expand: true
		  },
		},
	    watch: {
	      css: {
	        files: ['scss/*.scss','scss/*/*.scss'],
	        tasks: ['sass','copy'],
	      },
	    },

  });
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-copy');

  grunt.registerTask('default', ['sass']);
}