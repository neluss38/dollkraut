module.exports = (gulp, plugins, config) => {
    return () => {
        const { paths } = config;
        const run = config.run.js;
        const settings = config.settings.js;
    
        return gulp
            .src(paths.entry.img)
            .pipe(gulp.dest(paths.out.img.path));
    }
}