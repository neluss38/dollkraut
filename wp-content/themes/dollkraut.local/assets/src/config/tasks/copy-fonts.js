module.exports = (gulp, plugins, config) => {
    return () => {
        const { paths } = config;
        const run = config.run.js;
        const settings = config.settings.js;
    
        return gulp
            .src(paths.entry.font)
            .pipe(gulp.dest(paths.out.font.path));
    }
}