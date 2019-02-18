'use strict';

//this loads in all the gulp plugins from "package.json" instead of including all the packages in here!
const $ = require('gulp-load-plugins')();

//this requires gulp so your project will be watched and checked/compiled
const gulp = require('gulp');

//this will instantly refresh
const browserSync = require('browser-sync').create();

let proxy = 'dollkraut.local'

gulp.task('scss', () =>  {

    let out = gulp.src('scss/style.scss')
        .pipe( $.cssGlobbing({
            extensions: ['.scss']
        }));

    return out.pipe($.sourcemaps.init())
        .pipe($.sass({ style: 'compressed', sourcemap: true}))
        .on('error', $.sass.logError)
        .on('error', (err) => {
            $.notify().write(err);
        })
        .pipe($.rename('site.min.css'))
        .pipe($.sourcemaps.write('./'))
        .pipe(gulp.dest('css'))
        .pipe(browserSync.stream({match: '**/*.css'}));
});

gulp.task('jsvalidate', () => {
    gulp.src('js/main.js')
        .pipe($.jsvalidate())
        .pipe(browserSync.stream({match: '*.js'}));
});

// process JS files and return the stream.
gulp.task('js', function () {
    return gulp.src('js/*js')
        // .pipe(browserify())
        // .pipe(uglify())
        .pipe(gulp.dest('js'));
});

// create a task that ensures the `js` task is complete before
// reloading browsers
gulp.task('js-watch', ['js'], function (done) {
    browserSync.reload();
    done();
});


gulp.task('dev', ['scss', 'jsvalidate', 'js'], () => {

    browserSync.init({
        proxy: proxy
    })

    gulp.watch('scss/**/*.scss', ['scss'] );
    gulp.watch(['css/**/*.css']);
    gulp.watch('js/**/*.js', ['jsvalidate','js-watch']);
    gulp.watch().on('change', browserSync.reload);

});
