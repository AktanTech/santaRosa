var gulp = require('gulp');
var imagemin = require('gulp-imagemin');

gulp.task('compress', function(){
    return gulp.src('media/imagenes/*')
    .pipe(imagemin({interlaced: true, progressive: true, optimizationLevel: 10, svgoPlugins: [{removeViewBox: true}]}))
    .pipe(gulp.dest('media/compressImages'))
});