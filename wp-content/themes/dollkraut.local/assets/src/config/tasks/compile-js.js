const through2 = require('through2');

module.exports = (gulp, plugins, config) => {
  return () => {
    const { paths } = config;
    const run = config.run.js;
    const settings = config.settings.js;

    return gulp
      .src(paths.entry.js)
      .pipe(run.sourcemaps ? plugins.sourcemaps.init() : plugins.noop())
      .pipe(run.browserify ? plugins.bro(settings.browserify) : plugins.noop())
      .pipe(run.concat ? plugins.concat(paths.out.js.name) : plugins.noop())
      .pipe(run.uglify ? plugins.uglify() : plugins.noop())
      .pipe(plugins.sourcemaps.write("./"))
      .pipe(
        through2.obj(function(file, enc, cb) {
          let date = new Date();
          file.stat.atime = date;
          file.stat.mtime = date;
          cb(null, file);
        })
      )
      .pipe(gulp.dest(paths.out.js.path));
  };
};
