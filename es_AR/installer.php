<?php defined('SYSPATH') OR die('No direct access allowed.');
// DO NOT EDIT
// This file is automatically generated from the matching PO file
// Updates should be made through Transifex

// I18n generated at: 2012-07-31 00:04+0000
// PO revision date:  2012-07-12 21:40+0000

$lang = array (
  'base_path' => 'Directorio base',
  'database' => 'Base de datos',
  'database_host' => 'Dirección del servidor de base de datos',
  'database_host_description' => 'Si esta utilizando Ushahidi en su propio computador, esta dirección deberá ser "localhost". Si lo está utilizando en un servidor externo, deberá obtener esta información del proovedor del servidor',
  'database_name' => 'Nombre de la base de datos',
  'database_name_description' => 'El nombre de la base de datos que utilizará Ushahidi',
  'db_information_link' => 'Para más información vea <a href="http://wiki.ushahidi.com/doku.php?id=a_brief_word_on_databases" target="_blank">este artículo</a> en nuestro wiki, que describe bases de datos en más detalle',
  'default_language' => 'Idioma',
  'default_language_description' => 'Cada instancia de Ushahidi posee algunos idiomas. Ud también puede <a href="http://wiki.ushahidi.com/doku.php?id=localisation_l10n_internationlisation_i18n&s[]=language#enabling_new_languages" target="_blank">agreagar otros</a>',
  'disable' => 'Deshabilitar',
  'enable' => 'Habilitar',
  'error_summary' => 'Esta es una lista de los errores que encontramos',
  'files_location_text' => 'El directorio en su servidor donde se han copiado los archivos de Ushahidi. <strong>Esta valor fue deetectado automáticamente, por favor verifique que sea correcto.</strong> Si este campo está vacío, significa que Ushahidi está instalado en el directorio raíz',
  'finished' => 'Terminado',
  'general' => 'General',
  'google_key' => 'Llave del API de <span>Google</span>',
  'google_key_description' => 'Obtenga su llave del API de Google. <a id="api-link" href="http://code.google.com/apis/maps/signup.html" target="_blank">aquí</a>',
  'go_back' => 'Retroceder',
  'index' => 
  array (
    'advanced' => 'INSTALACIÓN AVANZADA',
    'advanced_installation_description' => 'Obtiene toda la información para la instalación por medio de un proceso de cinco pasos, incluyendo servidor, mapar, nombre del sitio y detalles de contacto',
    'basic_installation' => 'INSTALACIÓN BÁSICA',
    'basic_installation_description' => 'Simple y rápida. Todo lo que necesita es el nombre del directorio raíz del servidor web y la información de la base de datos. Elija esta opción para realizar una instalación rápida. Luego de la instalación, puede completar la configuración del sistema en otro momento',
    'proceed' => 'Proceder',
    'welcome' => 'Bienvenido al proceso de instalación de Ushahidi. Escoja que tipo de instalación le gustaría realizar',
  ),
  'installation_successful' => 'Instalación Exitosa',
  'mail_server' => 'Servidor de Correo',
  'mail_server_host' => 'Servidor de email',
  'mail_server_host_description' => 'Ejemplos: mail.yourwebsite.com, imap.gmail.com, pop.gmail.com',
  'mail_server_password' => 'Contraseña',
  'mail_server_password_description' => 'La contraseña de la cuenta de correo',
  'mail_server_port' => 'Puerto TCP del servidor de email',
  'mail_server_port_description' => 'Puertos comunes: 25, 110, 995 (Gmail POP3 SSL), 993 (Gmail IMAP SSL)',
  'mail_server_type' => 'Tipo de servidor de email',
  'mail_server_type_description' => 'Internet Message Access Protocol (IMAP) o Post Office Protocol (POP). <a href="http://saturn.med.nyu.edu/it/help/email/imap/index.html" target="_blank">Cuál es la diferencia?</a>',
  'mail_server_username' => 'Usuario del servidor de email',
  'mail_server_username_description' => 'Si utiliza una cuenta de Gmail, Hotmail, o Yahoo Mail, use la direeción de email completa para el nombre de usuario',
  'map' => 'Mapa',
  'map_provider' => 'Proveedor de Mapas',
  'map_provider_description' => 'Ushahidi puede utilizar los siguientes proveedores de mapas: Google, Bing, Yahoo or Open Street Map. Escoja el que posea mayor nivel de detalle para el área que le interese',
  'other_steps' => 'Otros pasos...',
  'password' => 'Contraseña',
  'password_description' => 'Contraseña de la base de datos',
  'previous' => 'Anterior',
  'restart_apache' => 'Por favor reinicie Apache',
  'select_mail_server_ssl' => 'Habilita o deshabilita conexiones seguras',
  'select_mail_server_ssl_description' => 'Algunos servidores de email tienen la opción de utilizar  <abbr title="Secure Sockets Layer">SSL</abbr> al establecer una conexión. Se recomienda utilizar SSL ya que provee mayor seguridad al encriptar las comunicaciones',
  'setup_sms' => 'Configure un servidor SMS',
  'site_email' => 'Dirección de email del sistema',
  'site_email_alerts' => 'Dirección de email para alertas',
  'site_email_alerts_description' => 'Dirección de email para enviar alertas a los usuarios que lo soliciten. Esta dirección debe ser distinta a la dirección de email del sistema',
  'site_email_description' => 'Todos los mensajes del sitio utilizarán esta dirección',
  'site_name' => 'Nombre del sitio',
  'site_name_description' => 'El nombre que desea utilizar para este sitio web',
  'site_tagline' => 'Subtítulo',
  'site_tagline_description' => 'El subtítulo del sitio',
  'summary' => 
  array (
    'text_1' => 'El servidor web debe tener permiso de escritura a los siguientes archivos y directorios',
    'text_2' => '<p>Puede encontrar más información en cómo administrar permisos en:</p>
        <ul>
            <li><a href="http://www.washington.edu/computing/unix/permissions.html" target="_blank">Unix/Linux</a></li>
            <li><a href="http://support.microsoft.com/kb/308419" target="_blank">Windows</a></li>
        </ul>',
    'text_3' => 'Antes de comezar asegurese que el servidor web tenga permiso de escritura a los siguientes archivos y directorios. Puede ser necesario cambiar los permisos en forma manual',
    'text_4' => 'La siguiente información será necesaria para el proceso de instalación',
  ),
  'table_prefix' => 'Prefijo para las tablas',
  'table_prefix_description' => 'Usualmente no se utiliza ningún prefijo. Sin embargo, si se utilizan múltiples instancias del sistema en la misma base de datos, se debe colocar un prefijo para cada una',
  'title' => 'Título',
  'to_login' => 'Para ingresar, vaya a',
  'upload_data' => 'Subir reportes',
  'username' => 'Usuario',
  'username_description' => 'El usuario de la base de datos',
  'use_credentials' => 'y utilice este usuario y contraseña',
  'view_site' => 'Vea su sitio web',
);

