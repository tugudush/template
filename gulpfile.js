var gulp = require('gulp');

gulp.task('inject', function() {
    
    var wiredep = require('wiredep').stream;
    var inject = require('gulp-inject');
    
    var injectSrc = gulp.src(['./css/*.css', './js/*.js']);
    
    var injectOptions = {
        //ignorePath: '/public'
    };
    
    var options = {
        bowerJson: require('./bower.json'),
        directory: './bower_components'
        //ignorePath: '../../bower_components'
    };
    
    return gulp.src('./*.html')
        .pipe(wiredep(options))
        .pipe(inject(injectSrc, injectOptions))
        .pipe(gulp.dest('./'));
    
}); // end of gulp.task('inject', function()