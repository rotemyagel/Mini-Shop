const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();

//compile scss into css

function style() {
    // 1.where is my scss file
    return gulp.src('./assets/scss/**/*.scss')
    // 2.pass that file through sass compiler
    .pipe(sass().on('error', sass.logError))
    // 3.where do i save the compiled css
    .pipe(gulp.dest('./assets/css'))
    // 4. stream changes to all browser
    .pipe(browserSync.stream())
}

function watch() {
    browserSync.init({
        port: 8080,
        proxy: "http://mini-shop.local/"
    })
    gulp.watch('./assets/scss/**/*.scss', style)
    gulp.watch('./**/*.php').on('change', browserSync.reload)
    gulp.watch('./assets/js/**/*.js').on('change', browserSync.reload)


}

exports.style = style;
exports.watch = watch