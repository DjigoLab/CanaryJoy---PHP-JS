var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function(){
      return gulp.src('public/sass/list.scss')
      .pipe(sass()) // Converts Sass to CSS with gulp-sass
      .pipe(gulp.dest('public/css'))
  });

  gulp.task('watch', function(){
    gulp.watch('public/sass/**/*.scss', ['sass']); 
    // Other watchers
  })