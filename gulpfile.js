/**
 * Created by brian on 6/30/16.
 */
var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {
    return gulp.src('./wp-content/themes/illdy-child/scss/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./wp-content/themes/illdy-child/styles'));
});

gulp.task('sass:watch', function () {
    gulp.watch('./wp-content/themes/illdy-child/scss/*.scss', ['sass']);
});