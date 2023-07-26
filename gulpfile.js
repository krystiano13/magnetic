const { src, dest, watch, series } = require('gulp');

const sass = require('gulp-sass')(require('sass'));
const cleanCss = require('gulp-clean-css');

const styles = () => {
    return src('./sass/*.scss')
        .pipe(sass())
        .pipe(cleanCss())
        .pipe(dest('./css/'))
}

const watcher = () => {
    return watch(['./sass/**/*.scss'], styles);
}

exports.default = series(watcher, styles);