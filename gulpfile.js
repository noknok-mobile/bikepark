const { dest, src, series, parallel, watch } = require("gulp");
const pug = require("gulp-pug");
const browserSync = require("browser-sync").create();
const del = require("del");

const compileHtml = () => {
  return src(["src/*.pug", "src/ajax/*.pug"])
    .pipe(
      pug({
        pretty: true,
        basedir: "./src/",
      })
    )
    .pipe(dest("docs/"));
};

const styles = () => {
  return src("src/css/*.css").pipe(dest("docs/css/"));
};

const scripts = () => {
  return src("src/js/*.js").pipe(dest("docs/js/"));
};

const assets = () => {
  return src("src/img/*").pipe(dest("docs/img/"));
};

const fonts = () => {
  return src(["src/fonts/**/*"]).pipe(dest("docs/fonts/"));
};

const clean = () => {
  return del("docs/");
};

const watcher = () => {
  watch("src/**/*.pug", compileHtml);
  watch("src/css/*.css", styles);
  watch("src/js/*.js", scripts);
};

const liveServer = () => {
  browserSync.init({
    server: {
      baseDir: "./docs/",
      ghostMode: false,
    },
  });
  watch("docs/").on("change", browserSync.reload);
};

exports.build = series(
  clean,
  parallel(compileHtml, styles, scripts, assets, fonts)
);
exports.server = parallel(liveServer, watcher);
exports.clean = clean;
