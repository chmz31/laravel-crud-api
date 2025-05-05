# 📚 Laravel CRUD API - Students

Este proyecto es una **API RESTful** desarrollada en **Laravel** y **MySQL** para la gestión de estudiantes (CRUD completo). Además, incluye un **frontend simple en HTML, JavaScript y Bootstrap** que permite consumir esta API desde el navegador.

---

## 🚀 Tecnologías utilizadas

- ⚙️ **Backend**: Laravel 10, PHP 8.x, MySQL
- 💻 **Frontend**: HTML5, CSS3 (Bootstrap 4), JavaScript puro
- 🧪 **Herramientas**: Postman para testing, Git/GitHub para control de versiones

---

## 📁 Estructura del proyecto

laravel-crud-api/
├── app/ # Lógica de Laravel (Modelos, Controladores, etc.)
├── database/ # Migraciones y seeds
├── public/
│ └── frontend/
│ ├── index.html # Interfaz visual del CRUD
│ └── script.js # Conexión frontend ↔ API
├── routes/
│ └── api.php # Definición de rutas para la API
├── .env # Variables de entorno (no se sube a GitHub)
└── README.md # Este archivo
---

## 🔗 Endpoints principales

| Método  | Endpoint             | Acción                         |
|---------|----------------------|--------------------------------|
| GET     | `/api/students`      | Obtener todos los estudiantes |
| GET     | `/api/students/{id}` | Obtener un estudiante por ID  |
| POST    | `/api/students`      | Crear un nuevo estudiante      |
| PATCH   | `/api/students/{id}` | Actualizar un estudiante       |
| DELETE  | `/api/students/{id}` | Eliminar un estudiante         |

---
