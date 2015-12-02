var gulp = require('gulp');

var plumber = require('gulp-plumber');
var rename = require('gulp-rename');
var compass = require('gulp-compass');
var cssmin = require('gulp-cssmin');
// var uglify = require('gulp-uglify');

// compass
gulp.task('compass', function(){
    gulp.src('_scss/**/*.scss')
        .pipe(plumber())
        .pipe(compass({
            config_file: 'config.rb',
            comments: false,
            css: 'dist/app/webroot/theme/ratio_3_2/css/',
            sass: '_scss/'
        })
    );
});

// cssmin
gulp.task('cssmin', function () {
  gulp.src([
    'dist/app/webroot/theme/ratio_3_2/css/style.css',
    '!dist/app/webroot/theme/ratio_3_2/css/**/*.min.css'
  ])
  .pipe(cssmin())
  .pipe(rename({suffix: '.min'}))
  .pipe(gulp.dest('dist/app/webroot/theme/ratio_3_2/css'));
});

//uglify
// gulp.task('js', function() {
//   gulp.src([
//     'dist/app/webroot/theme/ratio_3_2/js/**/all.js',
//     '!dist/app/webroot/theme/ratio_3_2/js/**/*.min.js'
//   ])
//   .pipe(uglify())
//   .pipe(rename({suffix: '.min'}))
//   .pipe(gulp.dest('dist/app/webroot/theme/ratio_3_2/js'));
// });

//watch
gulp.task('watch', function(){
    gulp.watch('_scss/**/*.scss', function(event) {
        gulp.run('compass');
    });
    gulp.watch('dist/app/webroot/theme/ratio_3_2/css/**/*.css', function(event) {
        gulp.run('cssmin');
    });
//     gulp.watch('dist/app/webroot/theme/ratio_3_2/js/**/*.js', function(event) {
//         gulp.run('js');
//     });
});

gulp.task('default', function(){
    gulp.run('watch');
});

