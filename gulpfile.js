const gulp = require('gulp');
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');
var concatCss = require('gulp-concat-css');

gulp.task('minify-css', () => {
    return gulp
        .src(['public/css/all.css', '!**/*.min.css'])
        .pipe(cleanCSS())
        .pipe(rename({ suffix: ".min" }))
        .pipe(gulp.dest('public/css'));
});

gulp.task('concat', function () {
    return gulp.src(['public/library/bootstrap/css/bootstrap.css', 'public/css/style.css'])
        .pipe(concatCss("all.css"))
        .pipe(gulp.dest('public/css'));
});

gulp.task('default', gulp.parallel(['concat', 'minify-css']));