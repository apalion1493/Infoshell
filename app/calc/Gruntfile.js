module.exports = function(grunt) {
	grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        time: grunt.template.today("yyyy-mm-dd"), //new Date().toJSON().slice(0,10),
		uglify: {
            options: {
                banner: '//<%= pkg.name %> <%= pkg.version %> <%=time%>\n'
            },
			minifyJS: {
				files: [{
					src: [
                        'js/calc.js'
					],
					dest: 'dist/<%= pkg.name %>.all.min.js'
				}]
			},
            //ie8: true
		},
		cssmin: {
            options: {
                mergeIntoShorthands: false
            },
            target: {
                files: [{
                    src: [
                        'css/styles.css'
                    ],
                    dest: 'dist/<%= pkg.name %>.all.min.css'
                }]
            }
		},
        clean: ["dist/"],
	});

    grunt.loadNpmTasks('grunt-contrib-clean');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.registerTask('default', ['clean', 'uglify', 'cssmin']);
}