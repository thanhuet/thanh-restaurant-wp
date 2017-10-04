var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('watch', function () {
    gulp.watch(['assets/sass/**/*.scss'], ['scss']);
});

gulp.task('scss', function () {
    gulp.src('assets/sass/style.scss').pipe(sass().on('error', sass.logError)).pipe(gulp.dest(''))
});
gulp.task('default', ['scss', 'watch']);
//hehe