https://github.com/gustavo-1209/Pasteleria-laravel.git

Mis Decisiones de Diseño 
1. Tabla 
Nombre de la tabla: Pedidos de Tortas
Campos:

Campo		Tipo		¿Obligatorio?
id		bigint		si
tipo_torta	varchar		si
porciones	intger		si
decoracion	text		no
cliente		varchar		si
telefono	varchar		si
fecha_entrega	date		si
estado		varchar		si
created_at	timestamp	automático
updated_at	timestamp	automático

 2. Tipos de Pedidos
•Torta de cumpleaños
•Torta de boda
•Torta de bautizo
•Otros pedidos personalizados
3. ¿Se puede eliminar registros?
No, no se eliminan físicamente los registros.
Razón
Los pedidos no se borran de la base de datos solo se aplica un borrado lógico mediante el campo estado para conservar el historial de pedidos
