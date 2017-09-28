var gulp = require('gulp');
var sass = require('gulp-sass');
gulp.task('scss', function () {
    gulp.src('assets/sass/style.scss').pipe(sass().on('error', sass.logError)).pipe(gulp.dest(''))
});
gulp.task('watch', function () {
    gulp.watch(['assets/sass/style.scss'], ['scss']);
});
gulp.task('default', ['scss', 'watch']);