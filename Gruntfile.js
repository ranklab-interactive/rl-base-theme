module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        // concat: {
        //     // 2. Configuration for concatinating files goes here.
        // },

        sass: {                              // Task
            dist: {                            // Target
              options: {                       // Target options
                // style: 'compressed'
              },
              files: {                         // Dictionary of files
                'style.css': 'style/scss/app.scss',       // 'destination': 'source'                                
              }
            }
          },

        imagemin: {
            dynamic: {
                files: [{
                    expand: true,
                    cwd: 'style/images/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'style/images/'
                }]
            }
        },
        
        watch: {
          // scripts: {
          //   files: ['**/*.js'],
          //   tasks: ['jshint'],
          //   options: {
          //     spawn: false,
          //   },
          // },
          css: {
              files: ['style/scss/*.scss', 'style/scss/foundation/components/*.scss'],
              tasks: ['sass'],
              options: {
                  spawn: false,
              }
          },
          
          // images: {
          //     files: ['style/images/build/**/*.{png,jpg,gif}'],
          //     tasks: ['imagemin:single'],
          //     options: {
          //     spawn: false,
          //     }
          //   }                                
        }          
    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    // grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-imagemin');    
    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['sass', 'watch']);

}; 