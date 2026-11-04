# Feelgüd Agency — Nueva home

Página de inicio en HTML + CSS, en un solo archivo y sin dependencias de JavaScript.

## Contenido

- `index.html`: la página completa. El CSS está inline y en un bloque `<style>` en el `<head>`.
- `img/`: los logos en PNG transparente.
  - `feelgud.png`: logo oficial a color, sin modificar.
  - El resto son los logos de clientes en **versión blanca**, preparados para el fondo oscuro. Es una decisión de diseño, no un error.

## Antes de publicar: rellenar estos huecos

Busca y reemplaza en `index.html`:

| Marcador | Reemplazar por |
|---|---|
| `NUMERO_WHATSAPP` | Número en formato internacional, sin `+` ni espacios (ej. `34600111222`). Aparece en 4 botones. |
| `URL_INSTAGRAM` | URL del perfil de Instagram |
| `EMAIL_CONTACTO` | Email de contacto |

Revisa también estos enlaces internos: `/academia/` (botón «Ver cursos y libros») y `/blog/`. Ajústalos a las rutas reales del sitio.

## Notas técnicas

- **Fuentes:** Montserrat y Poppins desde Google Fonts. Si el sitio debe cumplir RGPD sin cargar recursos de Google, descárgalas y sírvelas en local.
- **Responsive:** la maquetación usa flex/grid con `auto-fit` y `clamp()`, así que se adapta sola. Hay un único breakpoint a 760px para centrar el menú.
- **Colores de marca:** están como variables en `:root` (`--naranja`, `--cian`, etc.) por si quieres pasar los estilos inline a clases.
- **WordPress:** si la web va con WordPress, la forma más fiel es pegar el contenido de `<body>` en un bloque «HTML personalizado» (o una plantilla de página a ancho completo sin cabecera ni pie del tema), añadir el `<style>` y el enlace de fuentes al `<head>`, y subir las imágenes a la biblioteca de medios cambiando las rutas `img/...`.
- **Accesibilidad:** los enlaces tienen foco visible, las imágenes tienen `alt` y los elementos decorativos están marcados con `aria-hidden`.
