var gulp = require('gulp');
var argv = require('yargs').argv;
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var gulpCssPreprocessor = require('gulp-css-preprocessor');
var gulpif = require('gulp-if');
var gutil = require('gulp-util');
var header = require('gulp-header');
var minify = require('gulp-minifier');
var rename = require('gulp-rename');

var isProduction = (argv.production === undefined) ? false : true;


// CSS preprocessor
gulp.task('styles', function() {
  return gulp.src('src/css/style.styl')
    .pipe(gulpCssPreprocessor())
    .pipe(autoprefixer({
      browsers: ['last 3 versions'],
      grid: true
    }))
    .pipe(header('/* Generated on: ' + new Date() + ' */\n'))
    .pipe(gulp.dest('dist/css/'))
    .pipe(gulpif(argv.production, minify({minify: true, minifyCSS: true})))
    .pipe(gulpif(argv.production, header('/* Generated on: ' + new Date() + ' */\n')))
    .pipe(gulpif(argv.production, rename({suffix: '.min'})))
    .pipe(gulpif(argv.production, gulp.dest('dist/css/')));
});


// WATCH
gulp.task('watch', function () {
	gulp.start('styles')
  gulp.watch('src/css/**/*.styl',['styles']);
});


// TASKS
// Bundled tasks
gulp.task('default', ['styles']);
