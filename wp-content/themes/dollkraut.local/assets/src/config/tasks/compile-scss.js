const postcssPresetEnv = require("postcss-preset-env");
const cssnano = require("cssnano");
const through2 = require("through2");

const postcssPlugins = [
  postcssPresetEnv({ 
    browsers: ["last 5 versions", "ie >= 9"],
    autoprefixer: { grid: true } 
  }),
  cssnano({
    preset: [
      "default",
      {
        discardComments: {
          removeAll: true
        }
      }
    ]
  })
];

module.exports = (gulp, plugins, config) => {
  return () => {
    const { paths } = config;
    const run = config.run.scss;
    const settings = config.settings.scss;

    return gulp
      .src(paths.entry.scss)
      .pipe(run.sassGlob ? plugins.sassBulkImport() : plugins.noop())
      .pipe(run.sourcemaps ? plugins.sourcemaps.init() : plugins.noop())
      .pipe(run.sass ? plugins.sass(settings.sass) : plugins.noop())
      .pipe(run.postcss ? plugins.postcss(postcssPlugins) : plugins.noop())
      .pipe(run.rename ? plugins.rename(paths.out.scss.name) : plugins.noop())
      .pipe(run.sourcemaps ? plugins.sourcemaps.write("./") : plugins.noop())
      .pipe(
        through2.obj(function(file, enc, cb) {
          let date = new Date();
          file.stat.atime = date;
          file.stat.mtime = date;
          cb(null, file);
        })
      )
      .pipe(gulp.dest(paths.out.scss.path));
  };
};
