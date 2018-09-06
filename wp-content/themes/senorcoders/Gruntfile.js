module.exports = function(grunt) {
  grunt.initConfig({
  sass: {
    dist: {
      files: {
        "src/css/devStyles.css" : "src/scss/styles.scss"
      }
    }
  },
  uglify: {
    my_target: {
      options: {
        beautify: true
      },
      files: {
        './js/senorcoders.min.js': ['src/js/**/*.js']
      }
    }
  },
  watch: {        
    css: {
      files: 'src/scss/**/*.scss',
      tasks: ['sass'],
    },
    js: {
      files: 'src/js/**/*.js',
      tasks: ['uglify'],
    }
  },
  browserSync: {
      dev: {
        bsFiles: {
          src: [
            'src/css/*.css',
            'src/js/*.js',
            '*/*.php'
          ]
        },
    options: {
          watchTask: true,
          server: './../../'
        }
      }
    }
  });
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-browser-sync');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.registerTask('default', [
      'browserSync',
      'watch'
    ]);
  };