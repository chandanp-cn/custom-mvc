const gulp = require('gulp');
const sass = require('gulp-sass');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const imagemin = require('gulp-imagemin');


gulp.task('css',async ()=>{
    gulp.src('public/styles/*.*')
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(gulp.dest('public/styles/'))
});
gulp.task('scripts',async ()=>{
    gulp.src('public/scripts/*.js')
    .pipe(uglify())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('public/scripts/min/'))
});

gulp.task('image',async ()=>{
    gulp.src('public/images/*.*')
    .pipe(imagemin())
    .pipe(gulp.dest('public/images/'));
});


gulp.task('default',gulp.parallel('css','scripts','image'));
