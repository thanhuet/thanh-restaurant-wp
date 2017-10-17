var gulp = require('gulp');
var sass = require('gulp-sass');
var livereload = require('gulp-livereload');

gulp.task('watch', function () {
    livereload.listen();
    gulp.watch(['assets/sass/**/*.scss'], ['scss']);
});
//yolotest
gulp.task('scss', function () {
    gulp.src('assets/sass/style.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(''))
        .pipe(livereload());
});
gulp.task('default', ['scss', 'watch']);
