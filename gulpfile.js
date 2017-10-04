var gulp = require('gulp');
var sass = require('gulp-sass');
gulp.task('scss', function () {
    gulp.src('assets/sass/style.scss').pipe(sass().on('error', sass.logError)).pipe(gulp.dest(''))
});
gulp.task('watch', function () {
    gulp.watch(['assets/sass/*.scss',
        'inc/widgets/**/assets/sass/*.scss',
    'assets/sass/header/menu/*.scss'], ['scss']);
});
gulp.task('default', ['scss', 'watch']);