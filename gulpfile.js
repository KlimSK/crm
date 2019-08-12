const gulp = require('gulp');
const concat = require('gulp-concat');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const uglify = require('gulp-uglify');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');
const imagemin = require('gulp-imagemin');

function styles() {
    return gulp.src(['./src/sass/**/*.sass', './src/sass/**/*.scss'])
        .pipe(sass())
        .pipe(concat('style.css'))
        .pipe(autoprefixer())
        .pipe(cleanCSS({
            level: 2
        }))
        .pipe(gulp.dest('./build/css'))
        .pipe(browserSync.stream());
}

function fonts() {
    return gulp.src('./src/fonts/**/*.*')
        .pipe(gulp.dest('./build/fonts'))
}
function libs() {
    return gulp.src('./src/libs/**/*.js')
        .pipe(concat('libs.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./build/js'))
        .pipe(browserSync.stream());
}

function custom_scripts() {
    return gulp.src('./src/js/*.js')
        .pipe(concat('script.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./build/js'))
        .pipe(browserSync.stream());
}


function imgCompress() {
    return gulp.src('./src/img/**')
        .pipe(imagemin({
            progressive: true
        }))
        .pipe(gulp.dest('./build/img/'))
}


function watch() {
    browserSync.init({
        server: {
            baseDir: "./"
        }
    });


    gulp.watch('./src/img/**', imgCompress);
    gulp.watch('./src/sass/**/*.sass', styles);
    gulp.watch('./src/sass/**/*.scss', styles);
    gulp.watch('./src/js/**/*.js', custom_scripts);
    gulp.watch('./**/*.html').on('change', browserSync.reload);
}


gulp.task('conc', gulp.series(styles, libs, custom_scripts, fonts));

gulp.task('watch', watch);

gulp.task('build', gulp.parallel(styles, libs, custom_scripts, fonts, imgCompress));

gulp.task('dev', gulp.series('build', 'watch'));

