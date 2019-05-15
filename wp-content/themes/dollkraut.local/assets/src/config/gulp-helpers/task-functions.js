module.exports = function(gulp, plugins, settings) {
  return {
    addTask: (name, task) => {
      gulp.task(name, require(`../tasks/${task}`)(gulp, plugins, settings));
    },
    addMultiTask: (name, tasks) => {
      gulp.task(name, gulp.series(tasks));
    }
  };
};
