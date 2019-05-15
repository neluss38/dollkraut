module.exports = (gulp, plugins, config) => {
    return () => {
        plugins.message.info(' ');
        plugins.message.info(
            plugins.util.colors.magenta.bold('Released for production! (╯°□°）╯彡┻━┻')
        );
        plugins.message.info(' ');

        return gulp.src(config.paths.entry.js); 
    }
}