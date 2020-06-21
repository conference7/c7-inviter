const gulp = require('gulp');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const rename = require('gulp-rename');
const uglify = require('gulp-uglify');

gulp.task('css', () => {
    const postcss = require('gulp-postcss')
    const sourcemaps = require('gulp-sourcemaps')

    return gulp.src(['./scss/**/*.css', './node_modules/flatpickr/dist/flatpickr.css'])
        .pipe(sourcemaps.init())
        .pipe(postcss([
            require('tailwindcss'),
            require('autoprefixer'),
        ]))
        .pipe(sourcemaps.write('.'))
        .pipe(concat('style.css'))
        .pipe(gulp.dest('./../www/'))
});

/* Scripts task */
gulp.task('scripts', function () {
    return gulp.src(['./js/*.js', './node_modules/flatpickr/dist/flatpickr.js'])
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(concat('script.js'))
        .pipe(gulp.dest('./../www/'))
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('./../www/'));
});

gulp.task('watch', function () {
    gulp.watch(['./scss/*/**.css', './scss/*.css'], gulp.series(['css']));
    gulp.watch('./js/*.js', gulp.series(['scripts']));
});

gulp.task('default', gulp.series(['css', 'scripts', 'watch']), () => {
    //
});