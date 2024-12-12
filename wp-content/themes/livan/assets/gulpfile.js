const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps');
const babel = require('gulp-babel');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const webpack = require('webpack-stream');
const ESLintPlugin = require('eslint-webpack-plugin');

const css = () => {
  return gulp
    .src('scss/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({ errLogToConsole: true }))
    .pipe(postcss([autoprefixer, cssnano]))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('../dist/css/'));
};

const js = () => {
  return gulp
    .src('js/main.js')
    .pipe(
      babel({
        presets: ['@babel/env'],
      })
    )
    .pipe(
      webpack({
        mode: 'production',
        devtool: 'source-map',
        plugins: [
          new ESLintPlugin()
        ],
      })
    )
    .pipe(gulp.dest('../dist/js/'));
};

const watchFiles = () => {
  gulp.watch('scss/**/*.scss', css);
  gulp.watch('js/**/*.js', js);
};

exports.watch = gulp.parallel(watchFiles, css, js);
exports.build = gulp.parallel(css, js);
