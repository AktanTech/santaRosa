var gulp = require('gulp');
var imagemin = require('gulp-imagemin');

   
gulp.task('compress', function(){
    return gulp.src('media/imagenes/*')
    .pipe(imagemin({progressive: true}))
    .pipe(gulp.dest('media/compressImages'))
});