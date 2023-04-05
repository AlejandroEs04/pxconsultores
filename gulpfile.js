const { src, dest, watch , parallel } = require('gulp');
const sass = require('gulp-sass')(require('sass'));

const paths = {
    scss: 'src/scss/**/*.scss',
    js: 'src/js/**/*.js'
}

// css es una función que se puede llamar automaticamente
function css() {
    return src(paths.scss)
        .pipe(sass())
        .pipe(dest('./public/build/css'));
}

function javascript() {
    return src(paths.js)
      .pipe(dest('./public/build/js'))
}

function watchArchivos() {
    watch( paths.scss, css );
    watch( paths.js, javascript );
}

exports.default = parallel(css, javascript, watchArchivos ); 