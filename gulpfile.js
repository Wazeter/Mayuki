var gulp = require('gulp');
var postcss = require('gulp-postcss');
var cssnano = require('cssnano');
var calc = require('postcss-calc');
var cssImport = require('postcss-import');
var partialImport = require('postcss-partial-import');
import postcssPresetEnv from 'postcss-preset-env';
var reporter = require('postcss-reporter');


gulp.task('css', function() {


	var processors = [
		cssnano,
		calc,
		cssImport,
		partialImport,
		reporter
	];
	return gulp.src('./assets/css/src/*.css')
		.pipe(postcss(processors))
		.pipe(gulp.dest('./assets/css'))
});
