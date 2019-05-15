module.exports = {
  entry: {
    js: "./src/js/site.js",
    scss: "./src/scss/base.scss",
    img: "./src/img/**/*",
    font: "./src/fonts/**/*"
  },
  out: {
    js: {
      path: "./dist/js",
      name: "bundle.js"
    },
    scss: {
      path: "./dist/css",
      name: "site.min.css"
    },
    img: {
      path: "./dist/img"
    },
    font: {
      path: "./dist/fonts"
    }
  },
  files: {
    js: "./src/js/**/*.js",
    scss: "./src/scss/**/*.scss"
  },
  dist: "./dist"
};
