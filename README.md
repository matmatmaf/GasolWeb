# GasolWeb

La página esta soportada por WordPress. Este proyecto es un tema para WordPress 6.4.2.
Para la implementación se necesita el pligin creado en gasolweb-post-types/gasolweb-post-types.php
La carga del tema en WordPress se realiza manualmente. Es decir, se debe crear la carpeta theme/gasolweb

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

- ejecutar `npm install`
- Crear archivo gulpfile.js o utilizar el del proyecto

### Ejecución

- acceder a la carpeta del proyecto con el comando `cd .\wp-content\themes\gasolweb\`
- ejecutar en una terminal `gulp` y dejar corriendo.

## Plugin

Se crea una rama solo para contener el plugin del proyecto. El plugin crea los tipos de post para diferenciarlos de otros. Estos post son de marcas y hechos.

## Post type

Se definen dos tipos de post, una de clientes y otro de marcas/proveedores. Esto solo con el fin de mostrar imágenes de estos.

# Ejecución en local

Se debe descargar una versión de WordPress.

- En esta, dentro de la carpeta `/wp-content/themes` crear una carpeta llamada "gasolweb" o como gusten.
- Dentro de la carpeta creada, colocar el contenido del proyecto correspondiente a la rama "public".
- Dentro de la carpeta de `/wp-content/plugin` crear una carpeta llamada "gasolweb-post-types" o como gusten. 
- Dentro de la carpeta creada, colocar el contenido del proyecto correspondiente a la rama "plugin".
- finalmente, preparado el proyecto, se ejecuta en una terminal nuevo un server php. Se puede utilizar el comando `php -S localhost:800`.
