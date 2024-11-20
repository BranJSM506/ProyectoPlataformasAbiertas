# ProyectoPlataformasAbiertas
Integrantes: 
Meybel Ajú Castro, Brandon Serrano Morales

##Descripción:
Este proyecto se basa en la creación de un sistema para una tienda de ropa que cuente con base de datos en la cual se realice el registro de ventas incluyendo la fecha, se pueda conocer la cantidad de prendas que hay en stock y la obtención de las marcas más vendidas.

##Diagrama de la base de datos
![image](https://github.com/user-attachments/assets/794a5704-a2eb-4f9b-95fa-7dc98150dcd9)
##Segundo avance de proyecto

  ##API con CRUD

1.Endpoint para obtener todas las prendas
  - Método:GET
  - Endpoint: http://localhost/ProyectoPlataformasAbiertas/public/index.php/prendas
  - Descripción: Obtiene todas las prendas que se encuentran almacenadas en la base de datos
    ```http
     GET http://localhost/ProyectoPlataformasAbiertas/public/index.php/prendas
     ```
    Ejemplo de respuesta:
 ```json
{
    "Resultado": [
        {
            "id_prenda": 1,
            "nombre_prenda": "Camiseta Nike Pro",
            "id_marca": 1,
            "stock": 50,
            "precio": 29900
        },
        {
            "id_prenda": 2,
            "nombre_prenda": "Zapatillas Adidas Superstar",
            "id_marca": 2,
            "stock": 30,
            "precio": 18999
        }
    ]
}
   ```

2.Endpoint para obtener prendas por id
  - Método:GET
  - Endpoint: http://localhost/ProyectoPlataformasAbiertas/public/index.php/prendas?id={id}
  - Descripción: Obtiene las prendas que se deseen consultar por medio del ID de la prenda
  
    ```http
     GET http://localhost/ProyectoPlataformasAbiertas/public/index.php/prendas?id={id}
     ```
    Ejemplo de respuesta:
 ```json
{
    "Resultado": {
        "id_prenda": 5,
        "nombre_prenda": "Chaqueta Zara Casual",
        "id_marca": 5,
        "stock": 15,
        "precio": 69799
    }
}
   ```

3.Endpoint para actualizar prendas
  - Método: PUT 
  - Endpoint:http://localhost/ProyectoPlataformasAbiertas/public/index.php/prendas?id={número_de_ID_de_la_prenda}
  - Descripción:  Actualiza la información de una prenda en específico indicado por el id de la prenda. 
   ```http
   PUT http://localhost/ProyectoPlataformasAbiertas/public/index.php/prendas?id={número_de_ID_de_la_prenda}
   ```

   Cuerpo de la petición (JSON):
   ```json
{
        "nombre_prenda": "Chaqueta Zara Casual",
        "id_marca": 5,
        "stock": 15,
        "precio": 50000
    }
   ```
   Ejemplo de respuesta:
   ```json
   {
     {"Resultado":1}
   }
   ```
Esto nos indica que realizó el cambio ya que al ser 1 es cambio o acción realizada, en caso de prensentar un 0 es que el cambio no se realizó.


4.Endpoint para crear prendas
  - Método: POST
  - Endpoint: http://localhost/ProyectoPlataformasAbiertas/public/index.php/prendas
  - Descripción: Permite el ingresar una nueva prenda en la tabla de la base de datos.
   ```http
   POST http://localhost/ProyectoPlataformasAbiertas/public/index.php/prendas
   ```

   Cuerpo de la petición (JSON):
   ```json
{
        "nombre_prenda": "Short de hombre",
        "id_marca": 5,
        "stock": 15,
        "precio": 20000
    }
   ```
   Ejemplo de respuesta:
   ```json
{"Resultado":"33"}
   ```
En este caso nos presenta el ID del producto que hemos agregado.

5.Endpoint para eliminar prendas
  - Método:DELETE
  - Endpoint: http://localhost/ProyectoPlataformasAbiertas/public/index.php/prendas?id={número_de_ID_de_la_prenda}
  - Descripción: Elimina una prenda por medio de su ID
   ```http
   DELETE http://localhost/ProyectoPlataformasAbiertas/public/index.php/prendas?id={número_de_ID_de_la_prenda}
   ```
   Ejemplo de respuesta:
   ```json
{"Resultado":1}
   ```
Esto nos indica que realizó el cambio ya que al ser 1 es cambio o acción realizada, en caso de prensentar un 0 es que el cambio no se realizó.

  6.Endpoint para obtener todas las ventas
  - Método:GET
  - Endpoint: http://localhost/ProyectoPlataformasAbiertas/public/index.php/ventas
  - Descripción: Obtiene todas las ventas que se encuentran almacenadas en la tabla ventas de la base de datos
      ```http
     GET http://localhost/ProyectoPlataformasAbiertas/public/index.php/ventas
     ```
    Ejemplo de respuesta:
 ```json
{
    "Resultado": [
        {
            "id_venta": 151,
            "id_prenda": 1,
            "cantidad": 3,
            "fecha_venta": "2024-09-28"
        },
        {
            "id_venta": 152,
            "id_prenda": 2,
            "cantidad": 5,
            "fecha_venta": "2024-09-29"
        }
    ]
}
   ```
  7.Endpoint para obtener ventas por id
  - Método: GET
  - Endpoint:http://localhost/ProyectoPlataformasAbiertas/public/index.php/ventas?id={Número_de-ID_de_la_prenda_que_se_vendió}
  - Descripción: Obtiene la venta que se deseen consultar por medio del ID de la venta, además de proporcionar datos como la fecha, la cantidad de artículos comprados y id de la prenda.
      ```http
     GET http://localhost/ProyectoPlataformasAbiertas/public/index.php/ventas?id={Número_de-ID_de_la_prenda_que_se_vendió}
     ```
    Ejemplo de respuesta:
 ```json
{
    "Resultado": {
        "id_venta": 154,
        "id_prenda": 4,
        "cantidad": 1,
        "fecha_venta": "2024-09-28"
    }
}
   ```
  8.Endpoint para actualizar ventas
  - Método: PUT 
  - Endpoint:http://localhost/ProyectoPlataformasAbiertas/public/index.php/ventas?id={número_de-ID_de_la_venta}
  - Descripción:  Actualiza la información de una venta en específico indicado por el id de la venta. 
   ```http
   PUT http://localhost/ProyectoPlataformasAbiertas/public/index.php/ventas?id={número_de-ID_de_la_venta}
   ```

   Cuerpo de la petición (JSON):
   ```json
{
    
        "id_prenda": 4,
        "cantidad": 2,
        "fecha_venta": "2024-09-28"
    
}
   ```
   Ejemplo de respuesta:
   ```json
   {
     {"Resultado":1}
   }
   ```
Esto nos indica que realizó el cambio ya que al ser 1 es cambio o acción realizada, en caso de prensentar un 0 es que el cambio no se realizó.

9.Endpoint para crear ventas
  - Método: POST
  - Endpoint: http://localhost/ProyectoPlataformasAbiertas/public/index.php/ventas
  - Descripción: Permite el ingresar una nueva venta en la tabla de la base de datos.
   ```http
   POST http://localhost/ProyectoPlataformasAbiertas/public/index.php/ventas
   ```

   Cuerpo de la petición (JSON):
   ```json
{
    
        "id_prenda": 4,
        "cantidad": 3,
        "fecha_venta": "2024-09-29"
    
}
   ```
   Ejemplo de respuesta:
   ```json
{"Resultado":"176"}
   ```
En este caso nos presenta el ID de la venta que hemos agregado.
  
10.Endpoint para eliminar ventas
  - Método:DELETE
  - Endpoint: http://localhost/ProyectoPlataformasAbiertas/public/index.php/ventas?id={número_de_ID_de_la_venta}
  - Descripción: Elimina una venta por medio de su ID
   ```http
   DELETE http://localhost/ProyectoPlataformasAbiertas/public/index.php/ventas?id={número_de_ID_de_la_venta}
   ```
   Ejemplo de respuesta:
   ```json
{"Resultado":1}
   ```
Esto nos indica que realizó el cambio ya que al ser 1 es cambio o acción realizada, en caso de prensentar un 0 es que el cambio no se realizó.

11.Endpoint para obtener todas las marcas
  - Método:GET
  - Endpoint: http://localhost/ProyectoPlataformasAbiertas/public/index.php/marcas
  - Descripción: Obtiene todas las marcas que se encuentran almacenadas en la base de datos
    ```http
     GET http://localhost/ProyectoPlataformasAbiertas/public/index.php/marcas
     ```
    Ejemplo de respuesta:
 ```json
{
    "Resultado": [
        {
            "id_marca": 1,
            "nombre_marca": "Nike"
        },
        {
            "id_marca": 2,
            "nombre_marca": "Adidas"
        }
    ]
}
   ```

12.Endpoint para obtener marcas por id
  - Método:GET
  - Endpoint: http://localhost/ProyectoPlataformasAbiertas/public/index.php/marcas?id={número_de_ID_de_la_marca}
  - Descripción: Obtiene las marcas que se deseen consultar por medio del ID de la marca
  
    ```http
     GET http://localhost/ProyectoPlataformasAbiertas/public/index.php/marcas?id={número_de_ID_de_la_marca}
     ```
    Ejemplo de respuesta:
 ```json
{
    "Resultado": {
        "id_marca": 2,
        "nombre_marca": "Adidas"
    }
}
   ```

13.Endpoint para actualizar marcas
  - Método: PUT 
  - Endpoint:http://localhost/ProyectoPlataformasAbiertas/public/index.php/marcas?id={número_de_ID_de_la_marca}
  - Descripción:  Actualiza la información de una marca en específico indicado por el id de la marca. 
   ```http
   PUT http://localhost/ProyectoPlataformasAbiertas/public/index.php/marcas?id={número_de_ID_de_la_marca}
   ```

   Cuerpo de la petición (JSON):
   ```json
 {
        "nombre_marca": "Adidass"
    }
   ```
   Ejemplo de respuesta:
   ```json
   {
     {"Resultado":1}
   }
   ```
Esto nos indica que realizó el cambio ya que al ser 1 es cambio o acción realizada, en caso de prensentar un 0 es que el cambio no se realizó.

14.Endpoint para crear marcas
  - Método: POST
  - Endpoint: http://localhost/ProyectoPlataformasAbiertas/public/index.php/marcas
  - Descripción: Permite el ingresar una nueva marca en la tabla de la base de datos.
   ```http
   POST http://localhost/ProyectoPlataformasAbiertas/public/index.php/marcas
   ```

   Cuerpo de la petición (JSON):
   ```json
 {
        "nombre_marca": "X"
    }
   ```
   Ejemplo de respuesta:
   ```json
{"Resultado":"13"}
   ```
En este caso nos presenta el ID del marca que hemos agregado.

15.Endpoint para eliminar marcas
  - Método:DELETE
  - Endpoint: http://localhost/ProyectoPlataformasAbiertas/public/index.php/marcas?id={número_de_ID_de_la_marca}
  - Descripción: Elimina una marca de acuerdo al ID indicado. 
   ```http
   DELETE http://localhost/ProyectoPlataformasAbiertas/public/index.php/marcas?id={número_de_ID_de_la_marca}
   ```
   Ejemplo de respuesta:
   ```json
{"Resultado":1}
   ```
Esto nos indica que realizó el cambio ya que al ser 1 es cambio o acción realizada, en caso de prensentar un 0 es que el cambio no se realizó.

  ## Endpoints vistas
  1.Marcas con Ventas
  - Método:GET
  - Endpoint: http://localhost/ProyectoPlataformasAbiertas/public/index.php/vistas/marcasconventas
  - Descripción: Obtiene todas las prendas que se encuentran almacenadas en la base de datos
    ```http
     GET http://localhost/ProyectoPlataformasAbiertas/public/index.php/vistas/marcasconventas
     ```
    Ejemplo de respuesta:
 ```json
{
    "Resultado": [
        {
            "nombre_marca": "Nike"
        },
        {
            "nombre_marca": "Adidass"
        }
    ]
}
   ```
2. Prendas vendidas y stock
  - Método:GET
  - Endpoint: http://localhost/ProyectoPlataformasAbiertas/public/index.php/vistas/prendasvendidasystock
  - Descripción: Obtiene todas las prendas que se encuentran almacenadas en la base de datos
    ```http
     GET http://localhost/ProyectoPlataformasAbiertas/public/index.php/vistas/prendasvendidasystock
     ```
    Ejemplo de respuesta:
 ```json
{
    "Resultado": [
        {
            "nombre_prenda": "Blusa Zara Formal",
            "total_vendido": "5",
            "stock": 10
        },
        {
            "nombre_prenda": "Camiseta Adidas Originals",
            "total_vendido": "5",
            "stock": 60
        }
    ]
}
   ```
3. Top 5 marcas vendidas
  - Método:GET
  - Endpoint: http://localhost/ProyectoPlataformasAbiertas/public/index.php/vistas/top5marcasvendidas
  - Descripción: Obtiene todas las prendas que se encuentran almacenadas en la base de datos
    ```http
     GET http://localhost/ProyectoPlataformasAbiertas/public/index.php/vistas/top5marcasvendidas
     ```
    Ejemplo de respuesta:
 ```json
{
    "Resultado": [
        {
            "nombre_marca": "Nike",
            "total_ventas": "14"
        },
        {
            "nombre_marca": "Under Armour",
            "total_ventas": "13"
        },
        {
            "nombre_marca": "Adidass",
            "total_ventas": "12"
        },
        {
            "nombre_marca": "H&M",
            "total_ventas": "11"
        },
        {
            "nombre_marca": "Zara",
            "total_ventas": "10"
        }
    ]
}
   ```
