const gulp = require('gulp'),
      sass = require('gulp-sass'),
      webserver = require('gulp-webserver');

gulp.task('sass', function(){ 
gulp.src('./scss/*.scss')
  .pipe(sass({
    outputStyle: 'expanded',
    sourceComments: true
  }))
  .pipe(gulp.dest('./app/css/'))
});

gulp.task('watch', function() {
gulp.watch('./scss/*.scss', ['sass']);
})

gulp.task('webserver', function(){
gulp.src('app')
  .pipe(webserver({
      fallback: 'index.html',
      livereload: true,
      directoryListing: true,
      open: true
  }))
});