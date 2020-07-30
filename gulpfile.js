var gulp = require('gulp');
var gulpCssPreprocessor = require('gulp-css-preprocessor');
var header = require('gulp-header');
var minify = require('gulp-minifier');
var rename = require('gulp-rename');

// CSS preprocessor
gulp.task('styles', function() {
  return gulp.src('src/css/styles.styl')
    .pipe(gulpCssPreprocessor())
    .pipe(header('/* Generated on: ' + new Date() + ' */\n'))
    .pipe(gulp.dest('static/css/'))
    .pipe(minify({minify: true, minifyCSS: true}))
    .pipe(header('/* Generated on: ' + new Date() + ' */\n'))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('static/css/'));
});


// WATCH
gulp.task('watch', gulp.series('styles', (done) => {
    gulp.watch('src/css/**/*.styl', gulp.parallel('styles'));
}));



// TASKS
// Bundled tasks
gulp.task('default', gulp.parallel('styles'));
