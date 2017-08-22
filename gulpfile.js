var gulp = require('gulp');
var less = require('gulp-less');
 
gulp.task('less', function () {
  return gulp.src('./source/_assets/less/app.less')
    .pipe(less())
    .pipe(gulp.dest('./public/css'));
});
