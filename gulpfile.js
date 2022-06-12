const gulp = require("gulp");
const sass = require("gulp-sass")(require("node-sass"));
const autoprefixer = require("gulp-autoprefixer");

gulp.task("sass", function () {
  return gulp
    .src("./assets/scss/*.scss")
    .pipe(sass({ outputStyle: "expanded" }))
    .pipe(autoprefixer())
    .pipe(gulp.dest("assets/compile"));
});

gulp.task("default", function () {
  gulp.watch("./assets/scss/*.scss", gulp.task("sass"));
});
