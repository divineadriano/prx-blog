---
title: 'ProximaX Tech - Diciembre 2018'
published: true
date: '01/13/2019 05:51 am'
publish_date: '01/13/2019 05:51 am'
taxonomy:
    category:
        - Tech
    tag:
        - 'tech talk'
image:
    summary:
        enabled: '1'
        file: tech-december.png
    text:
        enabled: '1'
        file: tech-december.png
    width: 1200
    height: 800
twittercardoptions: summary
articleenabled: false
musiceventenabled: false
orgaenabled: false
orga:
    ratingValue: 2.5
orgaratingenabled: false
eventenabled: false
personenabled: false
restaurantenabled: false
restaurant:
    acceptsReservations: 'yes'
    priceRange: $
comments:
    enabled: true
---

Hasta ahora nuestras actualizaciones se han centrado en preparar el lanzamiento de las redes de prueba para almacenamiento y streaming, además de optimizar nuestros documentos técnicos. El equipo se ha enfocado en el desarrollo de componentes y módulos para respaldar el motor de nuestra plataforma.

Hemos trabajado continuamente con los desarrolladores del Core de NEM para identificar áreas de colaboración e integración entre nuestros repositorios de código.

## Red de prueba de almacenamiento / Streaming en el horizonte

### Red de prueba de almacenamiento
Luego de varios meses de un enfoque intenso en el desarrollo de los componentes principales para la capa de almacenamiento, ahora estamos preparados para lanzar la red de prueba de almacenamiento. Dicha capa, tiene diferentes actores y es un ecosistema de nodos completamente diferente de la red de blockchain. Este es un componente de solución de base que utiliza una versión bifurcada de libp2p e IPFS para mejorar la comunicación, mejorar las tablas hash distribuidas reemplazándolas por una red de malla y agregar bibliotecas criptográficas específicamente para la plataforma de almacenamiento ProximaX Sirius.

La capa de almacenamiento introducirá un nuevo conjunto de API para permitir que los clientes externos accedan a las funciones principales. Próximamente será anunciado, proporcionando cada documentación por separado.

### Red de prueba de streaming 
Al igual que con la red de prueba de almacenamiento, nuestro equipo ha trabajado incansablemente hasta finales de 2018 con el fin de prepararse para el siguiente lanzamiento de la red de prueba de streaming. Esta se encuentra programada para iniciarse en el primer trimestre de 2019, sin embargo podría activarse una versión anterior del componente de la capa de streaming para este mes junto con la capa de almacenamiento.

La primera versión de la red de prueba contará con streaming de datos y datos anónimos/seguros únicamente. Siendo esta la base para el resto de las funciones, debido a que actúa como un servicio de presencia distribuida para todas las aplicaciones/clientes que utilizarán la mencionada capa.


### Similar a la red de prueba de blockchain
Al igual que la red de prueba de blockchain, estamos lanzando una red de prueba para cada capa como una forma de configurar nuestros cambios y prepararnos para el proceso de participación de la comunidad. Cada  uno de ellos se anunciarán por separado.

## Mejoras de la capa de blockchain

### Mecanismo de mercado

Varios agentes compiten por hacer la tarea en un modelo de mercado abierto. El objetivo central del mercado es el siguiente:

+ La selección de contra agentes para realizar la tarea en el mercado abierto, ya sea almacenamiento o verificaciones.
+ Aceptando el resultado de acciones en tokens.
+ Cambiando en consecuencia el índice de reputación.


### Sistema de reputación
La reputación es una métrica asociada a cada cuenta, puede calcularse a partir del historial de transacciones. Se expresa con la siguiente fórmula:
  
![Screen-Shot-2019-01-05-at-8.17.00-PM](/content/images/2019/01/Screen-Shot-2019-01-05-at-8.17.00-PM.png)
 
**En donde:**

+ *Nmin* - un número mínimo de contratos preconfigurados.
+ *Rini* - valor inicial para la reputación hasta que un nodo no tenga contratos Nmin.
+ *Nsuccess* - número de contratos exitosos finalizados por un nodo.
+ *Nall* - número de todos los contratos en los que ha participado un nodo.

La reputación es considerada por el mecanismo de selección de nodos. Un agente con un índice de reputación más bajo tendrá una menor probabilidad de ser seleccionado. La reputación con derechos adquiridos nos brinda un mecanismo para penalizar e incentivar a los usuarios en función de su desempeño. Asignando a los usuarios una identidad que podría afectar sus posibilidades de ser incluidos o excluidos del consenso del grupo. Esto a su vez fomenta el mejor rendimiento posible de cada usuario.

### Contrato namespace/objeto
Dado que se están introduciendo algunos contratos nuevos, hemos ampliado la plataforma ProximaX Sirius (NEM Catapult), incluso hemos creado un objeto de contrato abstracto que formará la base de nuestros nuevos contratos. Nos encontramos en la búsqueda de utilizar esta abstracción similar para nuestra eventual implementación de Supercontracts.

![Screen-Shot-2019-01-05-at-8.33.50-PM](/content/images/2019/01/Screen-Shot-2019-01-05-at-8.33.50-PM.png)

### Nuevo Contrato - ModifyContractTransaction
Con el nuevo sistema de reputación implementado, debemos crear un tipo de transacción / contrato específico para la capa de almacenamiento. Para llevarlo a cabo, desarrollamos un nuevo contrato llamado ModifyContractTransaction que contiene los siguientes detalles: duración, cuenta multisig, hash de archivo, cliente, ejecutores (ejemplo, nodos de almacenamiento) y verificadores.

![Screen-Shot-2019-01-05-at-8.33.07-PM](/content/images/2019/01/Screen-Shot-2019-01-05-at-8.33.07-PM.png)

## Documentos
Actualmente tenemos algunos trabajos por finalizar que serán publicados:

+ White Paper actualizado
+ Diseño técnico de alto nivel
+ Modelado de economía de token
+ Streaming de almacenamiento
+ Trazabilidad de Streaming de Almacenamiento
+ Proof of X Schema
+ Métricas de rendimiento de blockchain

## Desarrollo de aplicaciones
Meses atrás se iniciaron un buen número de aplicaciones, la mayoría de ellas culminadas en su totalidad y forman parte de nuestro paquete oferta.

+ ProximaX Suite (anteriormente ProxiSuite) es una aplicación de office suite respaldada por blockchain y con almacenamiento de ProximaX Sirius. Es parte del paquete de software opcional.

+ ProximaX File It !, ProximaX Notes y ProximaX Vault (anteriormente ProxiBox, ProxiNotes y ProxiKeepass respectivamente), están culminados, ahora vendemos estas herramientas como parte de la colección de utilidades que incorporamos junto con la infraestructura de catapult. ProximaX File It! es un sistema de administración de archivos descentralizado que puede utilizarse para compartir archivos de forma segura. ProximaX Notes es una aplicación de escritorio para tomar notas, se utiliza principalmente para almacenar de forma segura archivos de formato basados en texto cifrado, y ProximaX Vault es un administrador de contraseñas que utiliza la base de datos keepass almacenada de forma segura a través del cifrado en la blockchain y el almacenamiento de ProximaX Sirius. 

+ Explorer y Wallet también forman parte de un paquete opcional para que los clientes utilicen la blockchain de ProximaX Sirius tan pronto sean equipados.


## Resumen
A continuación se presenta un resumen del trabajo  realizado  en el mes de diciembre:

+ El desarrollo de los contratos principales y NEM Bison se fusionan en ProximaX Sirius Blockchain Layer
+ Desarrollo del código principal de almacenamiento y los componentes complementarios, como bibliotecas criptográficas, kits de desarrollo de software y utilidades.
+ Desarrollo de códigos centrales de streaming y kits de desarrollo de software.
+ Preparación para el lanzamiento de testnet de almacenamiento y streaming.
+ Actualización periódica de los documentos, tales como: notas técnicas, economía de token, proof of x schema, almacenamiento de streaming y métricas de rendimiento.