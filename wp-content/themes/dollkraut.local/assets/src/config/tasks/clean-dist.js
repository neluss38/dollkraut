module.exports = (gulp, plugins, config) => {
  return () => {
    const { paths } = config;
    return gulp
      .src(paths.dist, { read: false, allowEmpty: true })
      .pipe(plugins.clean());
  };
};
