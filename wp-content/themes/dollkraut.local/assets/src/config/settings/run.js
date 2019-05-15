const run = {
  default: {
    js: {
      babel: true,
      sourcemaps: true,
      browserify: true,
      concat: true,
      uglify: false,
    },
    scss: {
      sourcemaps: true,
      sass: true,
      rename: true,
      sassGlob: true,
      postcss: true,
    }
  },
  development: {
    scss: {
      postcss: true
    }
  },
  production: {
    js: {
      sourcemaps: false,
      uglify: true,
    },
    scss: {
      sourcemaps: false,
    }
  }
};

module.exports = run;
