const gulp = require("gulp");
const uglify = require("gulp-uglify-es").default;
const browserSync = require('browser-sync').create();
const plugs = require('gulp-load-plugins')({ lazy: false });
const php = require('gulp-connect-php');

// -- FILE PATHS

const paths = {
  sass: {
    src: 'src/css/**/*.sass',
    dist: 'dist/assets/css'
  },
  php: {
    src: 'src/**/*.php',
    dist: 'dist/'
  },
  js: {
    src: 'src/js/**/*.js',
    dist: 'dist/assets/js'
  },
  img: {
    src: 'src/img/**/*',
    dist: 'dist/assets/img'
  }
}


// -- FILE TASKS

gulp.task('sass', () => {
  return gulp.src(paths.sass.src)
    .pipe(plugs.sass().on('error', plugs.sass.logError))
    .pipe(gulp.dest(paths.sass.dist));
});

gulp.task('scripts', () => {
  return gulp.src(paths.js.src)
    .pipe(plugs.babel({ presets: ['env'] }))
    .pipe(uglify())
    .pipe(plugs.concat('app.js'))
    .pipe(gulp.dest(paths.js.dist));
});

gulp.task('image-min', () => {
  return gulp.src(paths.img.src)
    .pipe(plugs.imagemin([
      plugs.imagemin.jpegtran({ progressive: true }),
      plugs.imagemin.optipng({ optimizationLevel: 5 }),
      plugs.imagemin.svgo({
        plugins: [
          { removeViewBox: true },
          { cleanupIDs: false }
        ]
      })
    ]))
    .pipe(gulp.dest(paths.img.dist))
});

gulp.task('php', () => {
  return gulp.src(paths.php.src).pipe(gulp.dest(paths.php.dist))
})


// -- MAIN TASKS

gulp.task('browser-sync', () => {
  php.server({
    port: 8080,
    base: './dist',
    debug: false
  }, function () {
    browserSync.init({
      proxy: '127.0.0.1:8080/',
      notify: false
    });
  });

  gulp.watch(paths.js.src, gulp.series("scripts")).on('change', browserSync.reload);
  gulp.watch(paths.img.src, gulp.series("image-min")).on('change', browserSync.reload);
  gulp.watch(paths.sass.src, gulp.series("sass")).on('change', browserSync.reload);
  gulp.watch(paths.php.src, gulp.series("php")).on('change', browserSync.reload);
});

const build = gulp.series('sass', 'scripts', 'image-min', 'php', 'browser-sync');

gulp.task('default', build);
gulp.task('prod', build); // add minify scripts

