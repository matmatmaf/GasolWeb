# GasolWeb
La página esta soportada por wordpress. Este proyecto es un tema para wordpress 6.4.2.
Para la implementación se necesita el pligin creado en gasolweb-post-types/gasolweb-post-types.php
La carga del tema en wordpress se realiza manualmente. Es decir, se debe crear la carpeta theme/gasolweb

## Gulp
Como se ha extendido demasiado las variables y clases a utilizar, se ha optado por implementar gulp para la compilación de archivos scss.

### Instalación
- Crear el package.json en el proyecto con el comando `npm init`

- Agregar en el archivo package.json lo siguiente
```
  "devDependencies": {
    "gulp": "^4.0.2"
  },
  "dependencies": {
    "gulp-sass": "^5.1.0",
    "node-sass": "^9.0.0",
    "sass": "^1.70.0"
  }
```

ejecutar `npm install`

### Ejecución
- Crear archivo gulpfile.js o utilizar el del proyecto
- ejecutar en una terminal `gulp` y dejar corriendo.

## Plugin
Se crea una rama solo para contener el plugin del proyecto.

## Post type
Se definen dos tipos de post, una de clientes y otro de marcas/proveedores. Esto solo con el fin de mostrar imágenes de estos.