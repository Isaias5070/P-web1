# Descripción del proyecto — Tarea 1 WEB

## Resumen del proyecto
Este repositorio contiene una pequeña aplicación Laravel creada como ejercicio escolar. El objetivo principal fue implementar un controlador `PaginaController` con dos rutas y las vistas correspondientes:

- Ruta estática: `/bienvenida` → muestra el mensaje "Bienvenido a mi primera aplicación de Laravel".
- Ruta dinámica: `/saludo/{nombre}` → recibe un parámetro `nombre` y muestra un saludo personalizado.

El contenido del proyecto se encuentra dentro de la carpeta `tarea1WEB` en el repositorio.

---

## Archivos añadidos por el ejercicio
- `app/Http/Controllers/PaginaController.php` — controlador con los métodos `bienvenida()` y `saludo($nombre)`.
- `routes/web.php` — se añadieron las rutas:
  - `Route::get('/bienvenida', [PaginaController::class, 'bienvenida']);`
  - `Route::get('/saludo/{nombre}', [PaginaController::class, 'saludo']);`
- `resources/views/bienvenida.blade.php` — vista que muestra el mensaje de bienvenida.
- `resources/views/saludo.blade.php` — vista que muestra "Hola, {nombre}!".

---

## Cómo probar localmente
1. Abrir PowerShell en la carpeta del proyecto:
```powershell
Set-Location 'C:\Users\isaia\mi-nuevo-proyecto-webP1\tarea1WEB'
```
2. Instalar dependencias si hace falta (composer):
```powershell
composer install
```
3. Levantar el servidor de desarrollo de Laravel:
```powershell
php artisan serve
```
4. Visitar en el navegador:
- http://127.0.0.1:8000/bienvenida
- http://127.0.0.1:8000/saludo/Isaias

Toma capturas de pantalla de ambas rutas y colócalas en la carpeta `tarea1WEB/docs/screenshots`.

---

## Instrucciones para generar el PDF final (en Windows)
A continuación hay dos opciones: usar Google Chrome (o Edge) en modo headless para imprimir el Markdown/HTML a PDF, o usar `pandoc`.

Opción A — Usar Chrome/Edge (recomendado si no tienes pandoc):
1. Abre el archivo Markdown `project_description.md` en el navegador (puedes abrir la versión ubicada en `tarea1WEB/docs/project_description.md`).
2. En el navegador, selecciona imprimir y elige "Guardar como PDF".

Opción B — Usar Chrome headless desde PowerShell para imprimir un HTML a PDF (si exportas el MD a HTML antes):
```powershell
"C:\Program Files\Google\Chrome\Application\chrome.exe" --headless --disable-gpu --print-to-pdf="C:\Users\isaia\OneDrive\Escritorio\tareas web 1\Proyecto_Descripcion.pdf" "file:///C:/Users/isaia/mi-nuevo-proyecto-webP1/tarea1WEB/docs/project_description.html"
```

Opción C — Usar pandoc (si lo tienes):
```powershell
pandoc "C:\Users\isaia\mi-nuevo-proyecto-webP1\tarea1WEB\docs\project_description.md" -o "C:\Users\isaia\OneDrive\Escritorio\tareas web 1\Proyecto_Descripcion.pdf"
```

---

## Capturas requeridas
- `tarea1WEB/docs/screenshots/bienvenida.png` — captura de la ruta `/bienvenida`.
- `tarea1WEB/docs/screenshots/saludo_Isaias.png` — captura de la ruta `/saludo/Isaias` (o el nombre que prefieras).

Puedes insertar estas imágenes en el PDF o mantenerlas como archivos separados dentro de `tarea1WEB/docs/screenshots`.

---

## Respuestas de reflexión
1. ¿Cuál fue el objetivo del ejercicio?
- El objetivo fue practicar la creación de controladores, rutas y vistas en Laravel, entender el flujo request → controlador → vista y cómo pasar datos desde el backend a Blade.

2. ¿Qué aprendiste al completar la tarea?
- Aprendí a definir rutas estáticas y dinámicas, a pasar parámetros desde la URL al controlador, y a renderizar vistas Blade con datos enviados desde el controlador.

3. ¿Qué retos encontraste y cómo los resolviste?
- Un reto común es asegurarse de que las rutas no entren en conflicto con otras existentes; lo resolví nombrando rutas claras y probándolas en el servidor. Otro reto es recordar la ubicación correcta de las vistas (`resources/views`) y asegurar la correcta sintaxis de Blade.

4. ¿Cómo verificarías que la aplicación funciona correctamente?
- Levantando el servidor `php artisan serve` y visitando las rutas solicitadas. Además, revisar los logs en `storage/logs/laravel.log` si algo falla.

5. Conclusión breve
- El ejercicio es básico pero cubre conceptos fundamentales de Laravel: rutas, controladores y vistas. Repetir estos pasos aporta confianza para tareas posteriores más complejas.

---

## Nota final
He añadido este archivo en el repositorio en `tarea1WEB/docs` para que puedas completarlo con las capturas y generar el PDF final. Coloca las imágenes en `tarea1WEB/docs/screenshots` y sigue las instrucciones anteriores para generar el PDF.
