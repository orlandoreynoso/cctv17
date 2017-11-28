const gulp = require('gulp');
const sass  = require('gulp-sass');
const browserSync = require('browser-sync').create();
const reload      = browserSync.reload;
const autoprefixer = require('gulp-autoprefixer');

/*
4 métodos que debo saber

1. gulp.task():
2. gulp.src():  ruta de origen array de carpetas
3. gulp.dest(): ruta de destino array de carpetas
4 .gulp.watch():

*/


gulp.task('browser-sync', () => {
    //watch files
    var files = [
    './css/estilo.css',
    './*.php',
    './template/*.php',
    './inc/*.php',
    'libs/*.php',
    './*.js'
    ];

    //initialize browsersync
    browserSync.init(files, {
    //browsersync with a php server
    proxy: "localhost/tv63cristo/",
    notify: true
    });
});


/* En cualquier subcarpeta buscar: './sass/*//*.css';  sin la / */
/* En cualquier subcarpeta subnivel buscar uso dos asteriskos: './sass/**//*.css';  sin la / */
/*que es lo que va a ser*/
 /*en que direcetorio buscara los archivos de sasss */
  /* donde se almacenaran los archivos*/
gulp.task('myTasksass',()=>
      gulp.src('./sass/*.sass')
      .pipe(sass())
      .pipe(autoprefixer({
        versions: ['last 2 browsers']
      }))
      .pipe(gulp.dest('./css')) /* donde se almacenaran los archivos*/
      .pipe(browserSync.stream())
);

/* podemos escribir gulp myTask */
//gulp.watch('./sass', ['myTask']);//


gulp.task('default',['myTasksass', 'browser-sync'], () =>{
  gulp.watch('./sass/*.sass',['myTasksass']);
  //gulp.watch(files,['browser-sync']).on('change',browserSync.reload);
});
