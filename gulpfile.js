'use strict';

const gulp = require('gulp');
const watch = require('gulp-watch');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const concat = require('gulp-concat');


// copy php
gulp.task('php', ()=>{
  return gulp.src('*.php').pipe(gulp.dest('./dist'));
});

// minify semantic

gulp.task('semantic', () => {
  return gulp.src('./semantic/dist/semantic.min.css').pipe(gulp.dest('./dist/assets/css'));
});


// SASS

gulp.task('sass', function () {
 return gulp.src('./assets/sass/main.scss')
  .pipe(sourcemaps.init())
  .pipe(sass().on('error', sass.logError))
  .pipe(sourcemaps.write('./'))
  .pipe(gulp.dest('./dist/assets/css'));
});

// JS

gulp.task('vendorsJs', function() {
  return gulp.src(['bower_components/jquery/dist/jquery.js', 'bower_components/jquery-ui/jquery-ui.js'])
    .pipe(concat('vendors.js'))
    .pipe(gulp.dest('./dist/assets/js/vendors'));
});

gulp.task('mainJs', function() {
  return gulp.src('./assets/js/*.js')
    .pipe(gulp.dest('./dist/assets/js'));
});

gulp.task('default', () => {
  gulp.watch("./*.php", ['php']);
  gulp.watch("./assets/sass/*.scss", ['sass']);
  gulp.watch("./assets/js/*.js", ['mainJs']);
});
