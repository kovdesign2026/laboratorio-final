# laboratorio-final

## Laboratorio Final: Redes de Computadores (Capa de Aplicación)
**Universidad Libre - Facultad de Ingeniería**

---

### 📋 Descripción del Proyecto
Este repositorio contiene la aplicación web y los recursos desarrollados para el entorno de pruebas de la **Capa de Aplicación (Capa 7)** sobre un servidor web **Apache HTTP Server** en **Ubuntu Server 22.04**.

El objetivo principal es la experimentación, inspección y análisis del tráfico de red mediante herramientas como **Wireshark**, abarcando desde transferencias en texto plano (HTTP/1.1) hasta tráfico cifrado (HTTPS/TLS) y esquemas de autenticación web.

---

### 🌐 Topología y Direccionamiento de Red
El laboratorio se encuentra desplegado en una topología de red aislada (`192.168.100.0/24`):

| Nodo / Rol | Sistema Operativo | Dirección IP | Función |
| :--- | :--- | :--- | :--- |
| **Servidor Web** | Ubuntu Server 22.04 LTS | `192.168.100.10` | Servidor Apache2, soporte PHP, HTTPS y autenticación |
| **Cliente de Pruebas** | Linux Mint | `192.168.100.20` | Navegación, envío de formularios y consumo de servicios |
| **Analizador de Tráfico** | Kali Linux | `192.168.100.30` | Captura de paquetes e inspección en Wireshark |

---

### 🚀 Fases y Funcionalidades del Laboratorio

#### 1. Fase 2: Protocolo HTTP/1.1
- **Métodos HTTP:** Pruebas dinámicas con métodos `GET` y `POST`.
- **Análisis de Cabeceras:** Inspección de encabezados Request/Response (`Host`, `User-Agent`, `Content-Type`, `Server`, etc.).
- **Códigos de Estado:** Observación de respuestas `200 OK`, `301/302 Redirect`, `401 Unauthorized`, `404 Not Found`, entre otros.

#### 2. Fase 3: Protocolo Seguro HTTPS / TLS
- Despliegue en el puerto **443 (TCP)**.
- Implementación de cifrado mediante certificados digitales **X.509 autofirmados** generados con **OpenSSL**.
- Análisis del ciclo de negociación **TLS Handshake** e imposibilidad de inspección directa del payload sin claves de sesión.

#### 3. Fase 4: Esquemas de Autenticación
- **/privado/ (HTTP Basic Authentication):** Credenciales codificadas en **Base64** transmitidas en la cabecera `Authorization`. Demostración de vulnerabilidad en HTTP y mitigación en HTTPS.
- **/seguro/ (HTTP Digest Authentication):** Esquema de autenticación desafío-respuesta con **Nonce** y hashing **MD5** para evitar la transmisión de contraseñas en texto claro.

---

### 📁 Estructura del Repositorio

```text
├── css/
│   └── styles.css          # Hoja de estilos con diseño responsive y moderno
├── js/
│   └── script.js           # Validación cliente y comprobación de estado HTTP 200 OK
├── images/
│   └── logo.svg            # Identidad gráfica vectorial del laboratorio
├── index.html              # Página principal y resumen del entorno
├── servicios.html          # Tabla de arquitectura, rutas, puertos y seguridad
├── formulario.html         # Formularios de prueba para métodos GET y POST
├── procesar.php            # Endpoint PHP receptor de peticiones POST
├── buscar.php              # Endpoint PHP receptor de parámetros Query String (GET)
└── README.md               # Documentación general del proyecto
```

---

### ⚙️ Despliegue en Servidor Apache

1. **Instalar paquetes necesarios en Ubuntu Server:**
   ```bash
   sudo apt update
   sudo apt install -y apache2 php libapache2-mod-php openssl
   ```

2. **Copiar los archivos al directorio raíz web:**
   ```bash
   sudo cp -r * /var/www/html/
   ```

3. **Asignar permisos adecuados:**
   ```bash
   sudo chown -R www-data:www-data /var/www/html/
   sudo chmod -R 755 /var/www/html/
   ```

4. **Habilitar módulos y reiniciar el servicio:**
   ```bash
   sudo a2enmod ssl
   sudo a2enmod auth_digest
   sudo systemctl restart apache2
   ```

---

### 🛠️ Tecnologías Empleadas
- **HTML5 & CSS3**
- **JavaScript (ES6+)**
- **PHP 8.x**
- **Apache HTTP Server 2.4**
- **Wireshark**
- **OpenSSL**
