# 🏠 CasoEstudio2 - Sistema de Alquiler de Casas

Proyecto desarrollado para el curso **Ambiente Web Cliente Servidor** de la **Universidad Fidélitas**.

## 📌 Descripción

Este sistema web permite la **gestión y alquiler de casas**, implementando una arquitectura **MVC en PHP** conectada a una base de datos **MySQL**.

Incluye funcionalidades para:
- Consultar casas disponibles
- Visualizar información detallada
- Alquilar casas
- Actualizar estados automáticamente

---

## 🎯 Objetivo del Proyecto

Desarrollar una aplicación web que permita administrar el alquiler de casas mediante:
- Consulta de disponibilidad
- Registro de alquileres
- Persistencia de datos en MySQL
- Uso de procedimientos almacenados

---

## 🛠️ Tecnologías Utilizadas

- PHP (MVC)
- MySQL
- HTML / CSS
- XAMPP
- Bootstrap

---

## 🗄️ Base de Datos

### Nombre:
CasoEstudioMN

### Tabla: CasasSistema

| Campo            | Tipo           | Descripción |
|------------------|----------------|------------|
| IdCasa           | INT (PK, AI)   | Identificador único |
| DescripcionCasa  | VARCHAR(30)    | Descripción de la casa |
| PrecioCasa       | DECIMAL(10,2)  | Precio mensual |
| UsuarioAlquiler  | VARCHAR(30)    | Usuario que alquila |
| FechaAlquiler    | DATETIME       | Fecha de alquiler |

---

## 🔍 Funcionalidades

### 🟦 Consulta de Casas

- Muestra descripción, precio, usuario, estado y fecha
- Filtra precios entre ₡115,000 y ₡180,000
- Ordena por disponibilidad (primero disponibles)

---

### 🟩 Alquiler de Casas

- Selección de casa disponible (Dropdown)
- Precio automático (solo lectura)
- Usuario obligatorio
- Fecha automática
