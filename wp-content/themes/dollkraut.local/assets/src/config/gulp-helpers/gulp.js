let gulp = require("gulp");
const plumber = require("gulp-plumber");
const gutil = require("gulp-util");

const gulp_src = gulp.src;

const onError = function(err) {
    gutil.log(gutil.colors.red(`Error: ${err.message}`));

    this.emit("end");
};

gulp.src = function() {
  return gulp_src.apply(gulp, arguments).pipe(
    plumber({errorHandler: onError})
  );
};

module.exports = gulp;
