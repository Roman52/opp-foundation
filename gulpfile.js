var gulp          = require( 'gulp' ),
    livereload    = require( 'gulp-livereload' )

var onError = function( err ) {
    console.log( 'An error occurred:', err.message );
    this.emit( 'end' );
}

gulp.task( 'watch', function() {
    livereload.listen();
    // gulp.watch( 'style.scss', gulp.series('scss') );
    gulp.watch( './**/**/*.php' ).on( 'change', function( file ) {
        livereload.changed( file );
    } );
} );

gulp.task( 'default', gulp.series('watch', function() {
}));