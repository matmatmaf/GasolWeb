'use strict'

var gulp	= require('gulp');
var	sass 	= require('gulp-sass')(require('sass'));

var sources = {
	sass: './scss/**/*.scss'
}

let styles = () => {
	return gulp.src(sources.sass)
		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(gulp.dest('./'))
}

const build = gulp.series(
	styles
)

exports.build = build
exports.task  = build
exports.default = () => {
	gulp.watch(sources.sass, styles);
}