var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;
var connect = require('gulp-connect-php');
var sass = require('gulp-sass');

gulp.task('task', function(){
  gulp.watch('./templates/**/*.html.twig').on('change', browserSync.reload);
  connect.server({}, function(){
    browserSync.init({
      proxy: 'http://default.dd:8083'
    });
  });
});
