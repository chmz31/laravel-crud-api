# 📚 Laravel CRUD API - Students

Este proyecto es una **API RESTful** desarrollada en **Laravel** y **MySQL** para la gestión de estudiantes (CRUD completo). Además, incluye un **frontend simple en HTML, JavaScript y Bootstrap** que permite consumir esta API desde el navegador.

---

## 🚀 Tecnologías utilizadas

- ⚙️ **Backend**: Laravel 10, PHP 8.x, MySQL
- 💻 **Frontend**: HTML5, CSS3 (Bootstrap 4), JavaScript puro
- 🧪 **Herramientas**: Postman para testing, Git/GitHub para control de versiones

---

laravel-crud-api/
├── app/                 # Modelos, controladores y lógica de negocio
├── bootstrap/
├── config/
├── database/            # Migraciones y seeds
├── public/
│   └── frontend/        # Interfaz visual (HTML + JS)
│       ├── index.html   # Interfaz del CRUD
│       └── script.js    # Comunicación frontend ↔ API
├── resources/
├── routes/
│   └── api.php          # Rutas API (RESTful)
├── storage/
├── .env                 # Variables de entorno (no subir a GitHub)
├── .gitignore
├── composer.json
└── README.md

## 🔗 Endpoints principales

| Método  | Endpoint             | Acción                         |
|---------|----------------------|--------------------------------|
| GET     | `/api/students`      | Obtener todos los estudiantes |
| GET     | `/api/students/{id}` | Obtener un estudiante por ID  |
| POST    | `/api/students`      | Crear un nuevo estudiante      |
| PATCH   | `/api/students/{id}` | Actualizar un estudiante       |
| DELETE  | `/api/students/{id}` | Eliminar un estudiante         |

---
